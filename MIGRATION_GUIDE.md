# 古いプロジェクトを雛形と同等に整備するための手順書

このドキュメントは、雛形（`~/Documents/雛形/`）が提供する構造・規約・ビルド環境を、既存の古いプロジェクトに適用するための標準手順です。

## CCへの指示

ユーザーから以下のような指示を受けた際、本手順を参照し実行すること：

- 「このプロジェクトを最新の標準に揃えて」
- 「雛形と同じ構造にして」
- 「古いプロジェクトをリニューアル整備して」
- 「整えて」「最新化して」（プロジェクト構造文脈で）

実行前に必ず**対象プロジェクトの現状調査**を行い、整備対象を確定させること。完了後はユーザーに変更内容を簡潔に報告すること。

---

## 1. 対象プロジェクトの判定

以下のいずれかに該当する場合、本手順による整備が必要：

| 判定項目 | 雛形の期待状態 | 確認コマンド例 |
|---|---|---|
| `.agent/rules` symlink | `~/shared-agent-rules` へのsymlinkが存在 | `ls -la .agent/rules` |
| `.claude/` ディレクトリ | `commands/` と `pjid` が存在 | `ls -la .claude/` |
| `.gitignore` | 雛形版（OS/Node/SCSS/LocalWP/Agent/Claude対応） | `diff .gitignore ~/Documents/雛形/.gitignore` |
| `.DS_Store` / `.vscode/settings.json` の追跡 | 追跡されていない | `git ls-files \| grep -E "(\.DS_Store\|\.vscode)"` |
| `package.json` / `eslint.config.mjs` | 雛形と同等 | `ls package.json eslint.config.mjs` |
| node_modules | `npm install` 済み | `ls node_modules/.package-lock.json 2>/dev/null` |

判定の最小単位として、上記項目を1件ずつ確認し、欠けている項目だけを整備対象とする。**既に整備されている項目を再実行してはならない**（上書きで設定が破損する可能性）。

---

## 2. 事前確認

整備に着手する前に必ず以下を確認：

```bash
# プロジェクトルートで実行
git status                # 未コミット変更の把握
git branch --show-current # 作業ブランチの把握
git log -1 --oneline      # 直近コミットの把握
```

**未コミット変更が存在する場合**：
- 整備作業は独立したコミットとして扱う必要があるため、既存変更とは分離する
- 既存変更を先にコミットするか、整備後に分離コミットするかをユーザーに確認

**作業ブランチの選択**：
- 通常、現在のブランチに整備コミットを追加する
- main 直接コミットは避ける（雛形の運用方針として、変更は常に作業ブランチ経由）

---

## 3. 整備手順

### Phase 1：ルール参照とディレクトリ構造

```bash
# 1. .agent/rules symlink（gitignore対象なのでcommitされない）
mkdir -p .agent && ln -s /Users/nakamurayuuji/shared-agent-rules .agent/rules

# 2. .claude/commands と pjid（gitignore対象）
mkdir -p .claude/commands && touch .claude/pjid

# 3. .gitignore を雛形からコピー
cp /Users/nakamurayuuji/Documents/雛形/.gitignore ./.gitignore
```

**確認**：
```bash
ls -la .agent/rules    # symlink 解決を確認
git check-ignore -v .agent/rules .claude/ node_modules .DS_Store  # gitignore動作確認
```

### Phase 2：gitignore 対象の既存追跡ファイル整理

新しい `.gitignore` を導入しても、**既に追跡されているファイルは自動的に untrack されない**。明示的に `git rm --cached` で追跡から外す。

```bash
# .DS_Store 全削除
git ls-files | grep "\.DS_Store" | xargs git rm --cached

# .vscode/settings.json 等の個人設定
git rm --cached .vscode/settings.json
```

**判断基準**：
- `.DS_Store` / `.vscode/settings.json` → 必ず untrack
- `assets_yuino/css/*.css` 等のコンパイル系出力 → **個別判断**（reset系の手書きCSSが含まれる場合は untrack 対象から除外）
- ローカル実体は保持される（`--cached` のみのため）

### Phase 3：Node / ESLint 環境

```bash
cp /Users/nakamurayuuji/Documents/雛形/package.json ./package.json
cp /Users/nakamurayuuji/Documents/雛形/package-lock.json ./package-lock.json
cp /Users/nakamurayuuji/Documents/雛形/eslint.config.mjs ./eslint.config.mjs
npm install
```

**注意点**：
- `package.json` の `"name"` は `"dualtap"` のままで他案件と整合（個別案件ごとの変更は不要）
- ESLint対象パス（`assets_yuino/js/**/*.js`）が存在するか確認。存在しない場合は eslint.config.mjs の調整が必要
- 既存の SCSS ビルド方式（Live Sass Compiler 等）との衝突がないか確認
- `npm audit` で脆弱性が出る可能性あり → 雛形側と同期して対応するため、個別対処は避ける

### Phase 4：PJ_ID 設定

```bash
# .claude/pjid に PJ_ID を記入（例: P-2605-04）
echo "P-XXXX-XX" > .claude/pjid
```

**PJ_ID の決定**：
- 既存案件ならProjects シート（Google Drive 案件管理表）から確認
- 新規案件なら年月＋連番（例：2026年5月の4件目 → `P-2605-04`）
- Projects シートへの新規登録は別作業（`qc-setup.html` 等のUI経由）

---

## 4. コミット戦略

### 整備コミットは独立させる

整備作業は機能変更とは独立した「構造整備」として扱う：

```bash
# 整備対象ファイルのみ stage
git add .gitignore package.json package-lock.json eslint.config.mjs
# 削除ステージは git rm --cached で既に staged

# 機能変更ファイル（例：page-*.php 等）は別コミットに残す
```

### コミットメッセージ

日本語で、整備内容を簡潔に：

```
プロジェクト構造を雛形と同等に整備

shared-agent-rules を参照する .agent/rules symlink と、CC 用の
.claude/ 構造を導入。雛形と同じ .gitignore / package.json /
eslint.config.mjs を取り込み、Node/ESLint 環境を整備した。

- .gitignore を追加（OS/Node/SCSS/LocalWP/Agent/Claude 対応）
- .DS_Store ×N / .vscode/settings.json を追跡から除外
- package.json / package-lock.json / eslint.config.mjs を導入

Co-Authored-By: Claude Opus 4.7 (1M context) <noreply@anthropic.com>
```

### 案件管理表への記入

整備コミット完了後、Logs2026 シートへ記入：

```bash
python3 ~/.qc-tools/log_commit_to_sheet.py --commit HEAD --pj-id $(cat .claude/pjid)
```

---

## 5. 整備後の動作確認

### CC の rules 読み込み

整備後の**新しい CC セッション**で以下を確認：

- `~/.claude/CLAUDE.md` のグローバル import が変わらず機能している
- `.agent/rules` symlink で他エージェント（Cursor 等）からも参照可能
- 「カンプデータの一次情報源」「単位選択の原則」等の最新ルールが反映されている

### ESLint の動作確認

```bash
npx eslint --version
npx eslint assets_yuino/js/main.js  # 任意の対象ファイルで動作確認
```

### gitignore の動作確認

```bash
# 整備直後、status が想定通り（整備分のみ）であることを確認
git status

# 新規 .DS_Store などが ignored になることを確認
touch .DS_Store && git status  # .DS_Store が表示されなければOK
rm .DS_Store
```

---

## 6. 既知の判断ポイント

整備中に迷いやすい点。判断に困った場合はユーザーに確認すること：

### `package.json` の `name` フィールド

- 雛形は `"dualtap"`、他案件も同じ
- **変更しない**（個別案件名にしない）

### コンパイル CSS の追跡解除

- `.gitignore` には `assets_yuino/css/*.css` が含まれる（compiled CSS は追跡しない方針）
- ただし古い案件には手書きの reset CSS（`reset.css`、`reset_yd.css` 以外の variant）が含まれる場合がある
- **untrack 対象は `.DS_Store` と `.vscode/settings.json` に限定**するのが基本
- CSS ファイルの整理は別途ユーザーと相談

### `npm audit` の脆弱性

- 雛形と同じ `package-lock.json` を使う前提なので、脆弱性は雛形側と共通
- 個別案件で `npm audit fix` を実行すると雛形と乖離する
- **対処するなら雛形・全案件を同時更新**するのが望ましい

### 既存の SCSS ビルドツール

- 雛形は ESLint のみで SCSS ビルドは含まない（VSCode の Live Sass Compiler 拡張を前提）
- 古い案件が独自の SCSS ビルドツール（gulp 等）を使っている場合、`package.json` の上書きで設定が失われる可能性
- 上書き前に**既存 `package.json` の内容を確認**し、必要なら統合

---

## 7. 整備完了後のフロー

整備コミットが完了したら、雛形の標準的な作業フローに合流：

1. main に切り替えて pull
2. 作業ブランチを `--no-ff` でマージ（`general.md` の Git 運用ルール参照）
3. main を push
4. 連番で新しい作業ブランチを作成（例：`yuji-{slug}001`）

これで次回以降は雛形と同等の体制で作業が可能になる。

---

## 補足：今回（2026-05-22）整備済みの案件

参考までに、本手順書を起こすきっかけとなった整備実績：

- **2504hannan**（`P-2605-04` / 日産レンタリース阪南）：Phase 1〜4 + Logs2026 記入まで完了
