# hongo.app
本郷祭などのアプリを開発するプロジェクト
# 概要
本郷祭のアプリとか。最早なんだかよくわからない
# 構成
```
[Hongo.app]
        ├── [HSP](HSP製インタフェース)
        └── [panflet_harib1](デジタルパンフレット)
```

# 使い方
まだ決まってませーん

# 資料
[こちら](https://1drv.ms/u/s!Aon8nRZeqfoukzWwV8x0jwOCffax?e=hWWfsY)からもご覧ください
- 学校の地図をアプリ化
- コロナ濃厚接触者通知
- 各種申し込み
- ライブなど
- タイムスケジュール
- 体育祭とかも使えるように(汎用性)
	- 汎用性を持たせるにはIDを管理？
	- (気づかずにIDできれいに管理するように)
	- クッキーでできる！！！
	- 親は外部扱いでリストバンド管理？
	- 入ったときに勝手になるのは費用がかかる→バーコード読み込んで管理
	- リストバンドを普通のプリントでできるように＞
	- 2万人だったら業者頼まないと
	- 2万本で37万(カラー) 入場券で良くない？
	- QRコードをかざしてもらう
	- データはホームページのサーバーのうらで使う
	- 「Googleアカウントでログイン」を実装する
	- +こっちから割り振っておく
	
## 通知とばせるように
- アプリ側の問題(メアドを入れてもらうgoogle account認証実装、やだったらサヨナラ)
- LineBotで全部やる！！！！(公式アカウント 保守が大変、いじくれない)
- 管理する側のインターフェースもしっかりしないと

## IDをサーバーが記憶しておいて、教室の生徒がかかったら通知？

## 2Dが積層してるみたいに
なんとかなる

## (教室の込具合)
- QRコード(NFCたぐ)で読み取って人数を検知(本郷入場前に人数入力)
- 入るときに待ち時間表示するためにQRコード読み取り(必須)
- ORカメラ感知でラズパイで計測(クロームブック活用)
- スタンプラリー的に出るときにも(家に帰った人の分がわかりやすいように)
- スタンプラリーの景品をもらったら、帰った判定
上に書いたようにやればいい

## オープンソース(？)にして、来年とか他の学校も使えるように
UIをしっかり作っておく

## サーバーを借りる？
### Webサーバー借りる場合
- HTMLをアップロード(OSカスタムはAWS)
- PHPとかCGIはアップロードするのみ
- アプリを動かす場合には仮想マシンをかわなきゃ(AWS AZURE GCP)
- 仮想マシンはOSも自由
### 回線引いてルーターポート開放すればなんとか？？？
(セキュリティー的に…)
## 言語
- JavaScript
- HTML
- GO
- SWIFT(iPadのPlaygroundsというアプリで作れる)  

## リストバンド(紙)をつけさせる？ 
- 教室状況
- 感染通知
- *パンフレット*
- 麻布カプチーノ(接触確認PWA)
- 紙でもよくね
- (ガラケー　WindowsPhoneユーザーは切り捨て)
- IDとパスワードをQRで読み込み、ログインさせる。

## 段階
1. 欲しい機能確定＋ピクトグラム？？？でシステムの仕組みを書き出す
1. 一回かんたんなものを構築
1. 本番

## 使用言語
- HTML(PHPとCSSとJ.S.を並べる言語)
- PHP(データーベース整理)
- CSS(デザイン用)
- JavaScript(サイトを操作するためのもの)
- GAS(スプレッドシート、LineBotを使うなら)
- Java,Swift(アプリ開発用)

- 結論、アプリは無謀！！！！
- PWAでいきましょ
- 開発環境はWindows or MacでVisual Studio(無料版)で行く
- ソースコードの共有
# ライセンス
このリポジトリ内のファイルは、全て本郷学園　本郷祭実行委員電脳部技術課 Webアプリ開発チームによって製作されました。無断でのファイルの使用、改変、転載はおやめください。


Copyright(c)Hongo　junior and senior high school  School Festival Executive Committee Cyber Department Technology Division Web application production team 2022 All rights reserved.


(中二病っぽい名前なのは[この人](https://github.com/DailyGeekTech)のせいです)
