# AllWISE-Cohen

・Akari-Cohen.csv  
AkariのデータととCohenのデータをXmatchしたデータ。

・AllWISE-Cohen.csv  
AllWISEのデータとCohenのデータをXmatchしたデータ。

・AllWISE-Akari-Cohen.csv  
AllWISEのデータと、Akari-CohenのデータをXmatchしたデータ。

・AllWISE-Cohen.html  
raとdecを入力したらAllWISE-Cohenの中の星から近い順に10個出してくれる

・CohenStandards.csv  
上塚先生にGoogleDriveにおいてもらったCohenの標準星のリストを少しいじったもの。  
(columnの形がおかしかったので直した。計算しやすいようにraとdecの値をdeg単位に直した。)

・Connectiontest.php  
MySQLのlocalhost(ホスト名)のroot(ユーザー名)のtest(データベース名)に接続できるか確認するためのもの。  
(このサイトを参照しました→ https://qwerty.work/blog/2022/10/mysql-connect-test-php.php)    
これを実行すると下のようなエラーが出てしまう...  

<img width="700" alt="スクリーンショット 2023-05-30 14 05 40" src="https://github.com/koji0215/AllWISE-Cohen/assets/63410470/f18130f2-1a6b-44e5-a675-b3b5f2761766">  
  
このエラーの対策について調べて色々やっていますがうまくいかず...
