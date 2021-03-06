# hongo.app
本郷祭などのアプリを開発するプロジェクト
コードネーム:Hongodori
![image](https://user-images.githubusercontent.com/91722200/152088754-43d3e062-95e7-4c93-b10e-f258494f3669.png)

なんだか[これ](https://github.com/afes-website)の劣化コピーにしかならなそうな雰囲気
## 構成
[]はディレクトリ
```
[Hongo.app]
	├── [現在のシステム]	(現状システムディレクトリ)
	├── [login]		(試作ログインフォーム)
	├── [panflet_harib1]	(試作デジタルパンフレット)
	├── readme.md		(このファイル)
	├── これからの予定.txt	(これからの予定)
	├── これからの予定.xlsx	(同上)
	└── 20220128.docx	(仕様書)
```
## 資料
[こちら](https://1drv.ms/u/s!Aon8nRZeqfoukzWwV8x0jwOCffax?e=hWWfsY)からもご覧ください
議事録等は上のリンクに格納します


## For Non japanese developers
Thank you for reading this readme!
If you have some difficulties reading Japanese, please use translation service avalable in your countries or region.
If you want to join our team, please let me know as soon as possible!
We'll appriciate your contribution!

## 大枠
大まかな機能として
- イベントへの入退室管理
- 各企画(教室)の込み具合検知
- 文化祭のパンフレットの電子化
- 各種申し込み(リンクを押して、GoogleFormに飛ばすだけ...)
- 各企画の待ち時間一覧機能
- 濃厚接触者通知(ほぼ確実になくなる)
- 舞台等のタイムテーブルを見られるようにする
- スタンプラリーの電子化
等々をできるようにするものです。

### 汎用性
管理画面をわかりやすく作り、できる限りの汎用性を持たせることで少し変えるだけでも他校の行事、本校の他の行事用に転換できるようにする予定です

### 入退室管理について
入退室管理について、大まかな流れを書きますと、
1. 入場したときリストバンドか紙を配り、そこに書いてあるQRコードでログインしてもらう(つまりアカウントはこちらから割り振る形式です)
1. ログインを確認したら、データベースに何時何分に入場と記録
1. 各企画入場時に係員がお客さんのQRコードを読み取り(Chromebookという産業廃棄物で)、データベースに何時何分何の企画に入場と記録
(もしかしたらPaypayみたいにお客さんがQRコードを読み取ってデータベースに登録って形になるかも)
1. そのお客さんが次の企画に入り、それがデータベースに保存されると、前にいた企画から退出したという記録が残る
1. お帰りの場合は門で退場用のQRを読ませ、その人のデータの記録を終了する
このようなシステムで人数情報を集めるつもりです
ここで集めたデータを利用して、混雑状況を割り出します

### パンフレット電子化
パンフレットが紙で配れないらしいので(エコのためという名のお金節約？？？)、電子化を去年からしていました。
しかし、昨年はPDFで作ったものをサイトに乗せていただけだったため、誰にも見てもらえない悲しい状況に追い込まれました。
そのため、今年はウェブアプリとして最適なUIを考え、使いやすいマップにしたいと思います

### 来場者のIDをサーバーが記憶しておいて、教室の生徒がコロナにかかったら通知？
これについては来場者の連絡先をこんな弱小開発軍団が安全に保管できるのか問題があるため、かなりの確率で消えます。

### スタンプラリー
お帰りになる前に交換所に行ってＱＲコードを読み取り、何個の企画に行ったかで景品を渡したいと思います。
そのため読み取ったときに、何個の企画に入ったかをすぐ確認できるシステムを作ってもらいます
この辺のＵＩは機械弱者の生徒会役員にもわかるように頑張って作ってほしいです

### 各種申し込み
申し込みするためのUIをわざわざ作って安定性がないものになってしまっては困るので、外部サービス(GoogleForm)を活用します

### UI
学年間で引継ぎが大変にならないよう、維持管理やこのシステムの利用が簡単になるようにできる限り作ってほしいです

イメージ<br>
内容は変更予定です。


![本郷祭APP UI案4th_samsung-galaxys20ultra-cosmicblack-portrait Small](https://user-images.githubusercontent.com/54175159/152301515-d2cd0a1c-c8d8-4d87-a843-d54ed177684f.png)
![本郷祭APP UI案4th_iphonesered_portrait Small](https://user-images.githubusercontent.com/54175159/152301519-3639786c-c991-469a-85a4-8f0dfe3f2f90.png)
![本郷祭APP UI案4th_iphone12promaxgraphite_portrait Small](https://user-images.githubusercontent.com/54175159/152301521-f5606a60-97bb-4ec9-9bb0-d866053d1c8b.png)
![本郷祭APP UI案4th_google-pixel5-sortasage-portrait Small](https://user-images.githubusercontent.com/54175159/152301524-5454236d-c86b-478f-9311-a601ef0878e7.png)

### 言語
- HTML,CSS,JS
- PHP
- SQL

後未定...

### 段階
<!--[image](https://user-images.githubusercontent.com/54175159/152268019-6c55df2a-7cd5-4aee-a98a-84208a0e782e.png)-->
| 月 | 時期 | 作業目標 |
| ---- | ---- | ---- |
| 2月 | 中旬 | システムの根幹部分を完成させる |
|  | 下旬 | 試験的なUIを完成(シンプルなものでOK) |
| 3月 | 上旬 | 先生方との打ち合わせへ(UIの方向性や機能を検討) |
|  | 中旬 | 打ち合わせをもとにUI等を更新 |
|  | 下旬 | 機能部分の製作を開始 |
| 4月 | 上旬 |  |
|  | 中旬 |  |
|  | 下旬 | 機能部分の基礎を完成 |
| 5月 | 上旬 | 機能のサンプルを打ち込み(デモ版作成) |
|  | 中旬 | 先生方との打ち合わせ(デモ版を見せる) |
|  | 下旬 | 打ち合わせをもとに修正 |
| 6月 | 上旬 |  |
|  | 中旬 |  |
|  | 下旬 | 最終打ち合わせ |
| 7月 | 上旬 | 本番用サーバに以降 |
|  | 中旬 | システムを完成 |
|  | 下旬 |  |
| 8月 | 上旬 | データ打ち込みを開始 |
|  | 中旬 | 動作テスト |
|  | 下旬 |  |
| 9月 | 上旬 | 最終テスト |
|  | 中旬 | 最終調整 |
|  | 下旬 | 本番 |

### PWA
最初は各プラットフォーム向けにネイティブアプリを作ろうと思ったけど、今更Swiftとか勉強できないので、PWA形式で行こうということになりました

### まとめ
麻布のカプチーノの人たちのように強そうなプログラマーたちでも3人で2年間かかったそうなので、何とか人員を募集しています。もしよければぜひ加入お願いします
連絡先は　(hongodoridevs@gmail.com)です


## 関連リンク
- [COCOA](https://github.com/cocoa-mhlw/cocoa)(日本政府・厚労省の接触確認アプリ)
- [Covid19Rader](https://github.com/Covid-19Radar/Covid19Radar)(↑のベース)	
- [CAPPUCCINO](https://github.com/afes-website)(麻布の学園祭アプリ)

## ライセンス
<!--このリポジトリ内のファイルは全て、本郷学園 本郷祭実行委員 電脳部 技術課 Webアプリ開発チーム によって製作されました。無断でのファイルの使用、改変、転載はおやめください。-->
本アプリの内容はMITライセンスで提供しています。

本郷学園 本郷祭実行委員 電脳部 技術課 Webアプリ開発チーム

Copyright(c)Hongo junior and senior high school, School Festival Executive Committee, Cyber Department Technology Division, Web application production team 2022 All rights reserved.


(中二病っぽい名前なのは[この人](https://github.com/DailyGeekTech)のせいです)
