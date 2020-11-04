<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class question_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           //難易度1の問題
           $param = [
            'title'=>'1.練習しよう！',
            'lv_lvid'=>'1',
            'content'=>'「Hello_World!」と入力してみよう。',
            'answer'=> 'CST{Hello_World!}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'2.新参者？',
            'lv_lvid'=>'1',
            'content'=>'講義の中で主に使用したOSを以下の選択肢から1つ選び、番号で答えよ。
								1.MacOS
								2.Windows
								3.UNIX
								4.Linux',
            'answer'=> 'CST{3}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'3.長所を知って！',
            'lv_lvid'=>'1',
            'content'=>'以下の文章の空欄に当てはまる言葉をカタカナで答えよ。なお、二つの空欄には同じ言葉が入る。
			「同時に複数のユーザが利用できることを「　　　ユーザ」、同時に複数の処理ができることを「　　　タスク」という。」',
            'answer'=> 'CST{マルチ}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'4.今日はもう寝ます',
            'lv_lvid'=>'1',
            'content'=>'ログアウトする際に使用するコマンドを小文字のアルファベットで答えよ。',
            'answer'=> 'CST{exit}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'5.見ないで！',
            'lv_lvid'=>'1',
            'content'=>'ユーザにログインする際には、ユーザ名とパスワードを打ち込む。しかし、何を打ち込んでも画面には表示されなかった。これはなぜか。以下の選択肢からどちらかを選び、番号で答えよ。
								1.打ち込む際に他人にパスワードを見られないようにするため
								2.タイピング能力の向上を図るため',
            'answer'=> 'CST{1}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'6. ファイルを書き換えたい！',
            'lv_lvid'=>'1',
            'content'=>'ファイルを編集するコマンドを以下の選択肢から選んで番号で答えよ。 
                        1. comコマンド 
                        2. nanoコマンド 
                        3. editコマンド 
                        4. nonaコマンド ',
            'answer'=> 'CST{2}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'7. 解読まであと…？',
            'lv_lvid'=>'1',
            'content'=>'「1lkpq@4a3Z」というパスワードが解読されるまでの時間に最も近いと予想できる時間を以下の選択肢から1つ選び、番号で答えよ。
			            1. 60年
			            2. 6年
			            3. 6ヶ月
			            4. 6週間
			            5. 6日',
            'answer'=> 'CST{2}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'8. 安全第一！',
            'lv_lvid'=>'1',
            'content'=>'パスワードを変更するコマンドを小文字のアルファベットで答えよ。',
            'answer'=> 'CST{passwd}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'9. 新しい呼び名！',
            'lv_lvid'=>'1',
            'content'=>'WindowsやMacなどのOSではフォルダと呼ばれる、UNIX系OSにおいてファイルなどのデータをグループ化するための入れ物のことをなんというか。カタカナで答えよ。',
            'answer'=> 'CST{ディレクトリ}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'10. 木の根っこ？',
            'lv_lvid'=>'1',
            'content'=>'ディレクトリ構造において、一番上にあり、「/」で表現されるディレクトリのことをなんと呼ぶか。カタカナ8文字で答えよ。',
            'answer'=> 'CST{ルートディレクトリ}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'11. 今どこにいる？',
            'lv_lvid'=>'1',
            'content'=>'自分が今いるディレクトリを確認するコマンドを答えよ。小文字のアルファベットで答えよ。',
            'answer'=> 'CST{pwd}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'12. 間違い探し？',
            'lv_lvid'=>'1',
            'content'=>'diffコマンドは何をするコマンドか、以下の選択肢から1つ選び、番号で答えよ。 
                        1. ファイルを整理するコマンド 
                        2. ファイルを作成するコマンド
                        3. ファイルを比較するコマンド 
                        4. ファイルを管理するコマンド ',
            'answer'=> 'CST{3}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'13. 目的地までの道筋！',
            'lv_lvid'=>'1',
            'content'=>'目的のディレクトリを、現在いるディレクトリから順番に記述していく表現方法をなんと呼ぶか。',
            'answer'=> 'CST{相対パス}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'14. 目的地までの道筋！その2',
            'lv_lvid'=>'1',
            'content'=>'目的のディレクトリを、一番上のルートディレクトリから順番に記述していく表現方法をなんと呼ぶか。',
            'answer'=> 'CST{絶対パス}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'15. 自分の下には？',
            'lv_lvid'=>'1',
            'content'=>'ディレクトリの中身を確認するコマンドを小文字のアルファベットで答えよ。',
            'answer'=> 'CST{ls}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'16. 4匹のパスワード！',
            'lv_lvid'=>'1',
            'content'=>'以下の選択肢の中で最も強度が高いパスワードを選び、番号で答えよう。
								 1.1234
								 2.Apple
								 3.P7ne&@pp1e
								 4.passwd',
            'answer'=> 'CST{3}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'17. ディレクトリの作り方',
            'lv_lvid'=>'1',
            'content'=>'ディレクトリを作成するコマンドを以下の選択肢から1つ選んで番号で答えよ。
								1. chmod
								2. rmdir
								3. mkdir
								4. mkfil',
            'answer'=> 'CST{3}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'18. 戦闘力',
            'lv_lvid'=>'1',
            'content'=>'講義の中で使用した、パスワードのおおよその解読時間を算出してくれるサイトの名前をなんと言うか、以下の選択肢から1つ選んで番号で答えよ。
								1. How Much Is My Password?
								2. How Secure Is My Password?
								3. How Long Is My Password?
								4. How Strong Is My Password?',
            'answer'=> 'CST{2}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'19. インターネット上の住所',
            'lv_lvid'=>'1',
            'content'=>'以下の文章の空欄に当てはまる言葉を大文字のアルファベットで答えよ。
「インターネットを介して外部とやりとりする際に、送信先、送信元の区別に用いられる、4つの数字をドットで区切った形(192.168.1.3など)のことを　　アドレスという。」',
            'answer'=> 'CST{IP}',
        ];

        DB::table('questions')->insert($param);

	$param = [
            'title'=>'20. 通信できてる？',
            'lv_lvid'=>'1',
            'content'=>'相手の機器との疎通(支障なく通じること)を確認するコマンドを小文字のアルファベットで答えよ。',
            'answer'=> 'CST{ping}',
        ];

        DB::table('questions')->insert($param);



        //難易度2の問題
        $param = [
            'title'=>'1. 目的地までひとっとび！',
            'lv_lvid'=>'2',
            'content'=>'ディレクトリを移動するコマンドであるcdコマンドの「cd」は、何の英単語の略か、小文字のアルファベットで答えよ。空白はアンダーバー(_)で表記すること。',
            'answer'=> 'CST{change_directory}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'2. ちからがほしい',
            'lv_lvid'=>'2',
            'content'=>'test.txtファイルに「所有グループ」に「読み」の権限を追加したいときのchmodコマンドの操作を以下の空欄に当てはまるようにアルファベットと記号3文字で答えよ。
			$chmod␣     ␣test.txt',
            'answer'=> 'CST{u+r}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'3. 大量発生',
            'lv_lvid'=>'2',
            'content'=>'first.txtをsecond.txtというファイル名でコピーを取るには、コマンドをどのように入力し実行すると良いか。実行は1回とし、空白はアンダーバー(_)で表記すること。',
            'answer'=> 'CST{cp_first.txt_second.txt}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'4. 消すべし',
            'lv_lvid'=>'2',
            'content'=>'melonというディレクトリを削除したい。以下のコマンドを実行したが、エラーが出て削除できなかった。以下のコマンドに追加すべきrmコマンドのオプションを答えよう。
			$rm melon',
            'answer'=> 'CST{-r}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'5. ファイルの権限！',
            'lv_lvid'=>'2',
            'content'=>'ファイルの権限には、「読み」「書き」「実行」の3つがあるが、権限がない場合はなんの記号を用いて表現するか、記号1文字で答えよ。',
            'answer'=> 'CST{-}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'6. 誰に何が？',
            'lv_lvid'=>'2',
            'content'=>'次のパーミッションを読んで、どの所有権がどの権限を持っているのか、一致しているものを下の選択肢から1つ選び、番号で答えよ。
			-rwxrw-r--
			1. 所有者：全ての権限を持っている、所有グループ：全ての権限を持っている、その他のユーザ：どの権限も持っていない
			2. 所有者：全ての権限を持っている、所有グループ：読み、実行の権限を持っている、その他のユーザ：読みの権限を持っている
			3. 所有者：読み、書きの権限を持っている、所有グループ：読みの権限を持っている、その他のユーザ：どの権限も持っていない
			4. 所有者：全ての権限を持っている、所有グループ：読み、書きの権限を持っている、その他のユーザ：読みの権限を持っている',
            'answer'=> 'CST{4}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'7. 初心忘るべからず',
            'lv_lvid'=>'2',
            'content'=>'OSは、コンピュータを動かすための基本となる何と説明したか。以下の選択肢から1つ選び、番号で答えよ。
			1. ハードウェア
			2. ソフトウェア
			3. プログラム
			4. コマンド',
            'answer'=> 'CST{2}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'8. 住所特定',
            'lv_lvid'=>'2',
            'content'=>'インターネット上の住所のことをIPアドレスを呼ぶ。IPアドレスを確認するコマンドを答えよ。空白はアンダーバー(_)で表記すること。',
            'answer'=> 'CST{ip_address}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'9. 保存忘れは命とり！',
            'lv_lvid'=>'2',
            'content'=>'nanoコマンドでファイルの編集をしたあと、そのファイルを保存をするにはどのような操作をすれば良いか。操作順に数字を選び、カンマ(,)区切りで入力しよう。
								1. Ctrlキーを押しながらXを押す
								2. shiftキーを押しながらAを押す
								3. Yを押す
								4. Shiftキーを押しながらXを押す
								5. Nを押す
								6. Zを押す
								7. Ctrlキーを押しながらAを押す',
            'answer'=> 'CST{1,3}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'10. 確認できたら？',
            'lv_lvid'=>'2',
            'content'=>'相手の機器との疎通を確認するコマンドはpingコマンドだった。pingコマンドを実行すると、利用者が止めるまで疎通の確認をし続けてしまう。疎通確認後、どのような操作をして確認を止めるか。以下の選択肢から1つ選び、番号で答えよ。
								1. Shiftキーを押しながらCtrlキーを押す
								2. Ctrlキーを押しながらAを押す
								3. Enterキーを押す
								4. Escキーを押す
								5. Ctrlキーを押しながらCを押す
								6. Shiftキーを押しながらZを押す',
            'answer'=> 'CST{5}',
        ];

        DB::table('questions')->insert($param);

        $param = [
            'title'=>'11. 設定後は必ず！',
            'lv_lvid'=>'2',
            'content'=>'設定を行った後、反映するために用いるコマンドを小文字のアルファベットで答えよ。また、このコマンドは再起動の役割も兼ねている。',
            'answer'=> 'CST{reboot}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'12. 心得',
            'lv_lvid'=>'2',
            'content'=>'いま、新しくパスフレーズを設定するとする。それに当たって、以下の選択肢のうち、間違っていることを選択肢から2つ以上選び、番号で答えよ。数字の小さい順に、カンマ(,)区切りで入力すること。
            1. 以前使用したパスワードのうち、長めで複雑なパスワードを使う
            2. 覚えやすいように、誕生日と名前を組み合わせたパスワードにする
            3. 忘れた時のために、友達にもパスワードを覚えていてもらう
            4. 複雑にするために、アルファベットに記号や数字を組み合わせた自分だけのパスワードを考える',
            'answer'=> 'CST{1,2,3}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'13. 今ここ！',
            'lv_lvid'=>'2',
            'content'=>'相対パスのことを、現在いるディレクトリから順番に記述していく表現方法と説明した。文中の「現在いるディレクトリ」のことをカタカナでなんと呼ぶか。',
            'answer'=> 'CST{カレントディレクトリ}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'14. シンプルな答え',
            'lv_lvid'=>'2',
            'content'=>'ツリー構造を以下の絶対パスで表現した。カレントディレクトリがsampleのとき、homeディレクトリを相対パスで表現せよ。
            /home/CST-usrXX/sample/test',
            'answer'=> 'CST{../..}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'15. 権限の確認',
            'lv_lvid'=>'2',
            'content'=>'/home/CST-usrXX/questionの中にあるapple.txtというファイルのパーミッションを確認し、表示された10文字を答えよ。',
            'answer'=> 'CST{-rwxr-xr-x}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'16. これを使った！',
            'lv_lvid'=>'2',
            'content'=>'ファイルのパーミッションを確認するために使用したコマンドを答えよ。空白はアンダーバー(_)で表記すること。',
            'answer'=> 'CST{ls_-l}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'17. もしものために！',
            'lv_lvid'=>'2',
            'content'=>'cpコマンドで誤ってほかのファイルを上書きしないように、コピーを実行する前にコピーしてもよいか確認をしてくれるcpコマンドのオプションを答えよ。',
            'answer'=> 'CST{-i}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'18. 中身を見たい！',
            'lv_lvid'=>'2',
            'content'=>'ファイルの中身を見るコマンドを答えよ。',
            'answer'=> 'CST{cat}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'19. 初期地点',
            'lv_lvid'=>'2',
            'content'=>'一番上のディレクトリをルートディレクトリ、現在いるディレクトリをカレントディレクトリと呼んだ。では、ログインした際にいる初期地点のようなディレクトリのことをカタカナ3文字で何というか。',
            'answer'=> 'CST{ホーム}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'20. 自在にカスタマイズ！',
            'lv_lvid'=>'2',
            'content'=>'ハイフン(-)を先頭につけて記述する、コマンドの機能をカスタマイズするもののことをカタカナ5文字でなんというか。',
            'answer'=> 'CST{オプション}',
        ];
        DB::table('questions')->insert($param);
        
        //難易度3の問題
        $param = [
            'title'=>'1. より見やすく！',
            'lv_lvid'=>'3',
            'content'=>'lsコマンドでディレクトリの中身を1行ずつ表示したい。そのときlsコマンドにつける適切なオプションを答えよ。',
            'answer'=> 'CST{-1}',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'title'=>'2. 数字参戦！？',
            'lv_lvid'=>'3',
            'content'=>'orange.txtファイルのパーミッションを「-rwxr-xr--」にしたい。もっとも適したコマンドを以下の選択肢から2つ選び、番号で答えよ。数字の小さい順に、カンマ(,)区切りで入力すること。
            　1. chmod 754 orange.txt
              2. chmod 651 orange.txt
              3. chmod o+r orange.txt
              4. chmod g-w orange.txt
            ',
            'answer'=> 'CST{1,4}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'3. スーパーユーザー',
            'lv_lvid'=>'3',
            'content'=>'スーパーユーザーと呼ばれる通常よりも自由にコマンド操作ができるモードに一時的に入ることができるコマンドをアルファベット4文字で答えよ。',
            'answer'=> 'CST{sudo}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>"4. What’s it called in UNIX?",
            'lv_lvid'=>'3',
            'content'=>'UNIXではファイルの実体とファイル名をつなぐものを、「リンク」という。この「リンク」には2種類あるが、このうちWindowsでいう「ショートカット」と同じ機能を持っているものをカタカナで答えよ。',
            'answer'=> 'CST{シンボリックリンク}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'5. #!/bin/bash',
            'lv_lvid'=>'3',
            'content'=>'主にUNIX系OSで使用される、OSを操作するためにシェルで使用できる簡易的なプログラミング言語のことを何というか。',
            'answer'=> 'CST{シェルスクリプト}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'6. もっともっと簡単に！',
            'lv_lvid'=>'3',
            'content'=>'ホームディレクトリに移動する際、ホームディレクトリ名を入れなくても移動できるコマンドの表現方法がある。以下の選択肢よりホームディレクトリに移動できるコマンドをすべて選び、番号で答えよ。数字の小さい順に、カンマ(,)区切りで入力すること。
            1. cd /home
            2. cd –
            3. cd
            4. cd *
            5. cd ~
          ',
            'answer'=> 'CST{3,5}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'7. 抜け道！',
            'lv_lvid'=>'3',
            'content'=>'不正アクセスなどで侵入された際、次から侵入しやすくする抜け道を作られる場合がある。この抜け道のことを何というか。カタカナ5文字で答えよ。',
            'answer'=> 'CST{バックドア}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'8. 最新を見たい！',
            'lv_lvid'=>'3',
            'content'=>'ディレクトリ内のファイルやデータを更新時間順で表示させるには、lsコマンドにどのようなオプションをつければ良いか答えよ。',
            'answer'=> 'CST{-t}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'9. What is C.I.A.?',
            'lv_lvid'=>'3',
            'content'=>'情報セキュリティの3要素といわれている「機密性」、「完全性」、「可用性」。このうち、「機密性」について正しく説明しているものを以下の選択肢から選んで答えよ。
            1. 情報及び処理方法が正確であること及び、完全であることを保護すること。
            2. アクセスを認可された者だけが、情報にアクセスできることを確実にすること。
            3. 認可された利用者が必要なときに、情報及び関連する資産にアクセスできることを確実にすること。
            ',
            'answer'=> 'CST{2}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'10. How to talk?',
            'lv_lvid'=>'3',
            'content'=>'コンピュータ同士が通信を行う上での手順や規約のことをなんというか。',
            'answer'=> 'CST{プロトコル}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'11. 数打てば当たる？',
            'lv_lvid'=>'3',
            'content'=>'「総当たり攻撃」とも呼ばれ、パスワードに使われていると推測できる文字列を一つずつ変えながら試していき、正解に当たるまで試し続ける攻撃のことをなんというか。カタカナ12文字で答えよ。',
            'answer'=> 'CST{ブルートフォースアタック}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'12. A calculator!',
            'lv_lvid'=>'3',
            'content'=>'ファイル「/home/CST-usrXX/question/calculator/calculator」を開き、シェルでの数値計算コマンドを用いて「calculator」の計算問題を解いてみよう。
            ファイルの実行方法：$ ./calculator
            ',
            'answer'=> 'CST{HP_9100A}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'13. Find me!',
            'lv_lvid'=>'3',
            'content'=>'ファイル「/home/CST-usrXX/question/Lot_of_flags/Lot_of_flags」の中からホンモノのフラグを見つけ出そう。',
            'answer'=> 'CST{Thanks-for_finding@me!}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'14. Dummy!',
            'lv_lvid'=>'3',
            'content'=>'ディレクトリ「/home/CST-usrXX/question/dummy/」の中にあるfile1～file2000までの2000個のファイルの中から、ダミーではない本物のファイルを見つけよう！ 
            ※注意！「CST{This_flag_is_dummy!}」は本物のフラグではない。',
            'answer'=> 'CST{NOT_DUMMY!}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'15. 絶対に負けられない戦い',
            'lv_lvid'=>'3',
            'content'=>'あなたの友人はじゃんけん（英語でRock-Paper-Scissors）のアプリを作った。じゃんけんアプリは「/home/CST-usrXX/question/Rock_Paper_Scissors/」の「App」で、そのアルゴリズムは同じディレクトリ下の「App.sh」に書いてある。じゃんけんアプリに勝利してフラグを入手しよう。',
            'answer'=> 'CST{U+270A}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'16. Obstructive string',
            'lv_lvid'=>'3',
            'content'=>'ファイル「/home/CST-usrXX/question/Obstructive_strings/file_S」を開いてみよう。そのファイルにはフラグがあるはずだが、邪魔な文字列「x」、「y」、「z」が存在する。邪魔文字列を処理してフラグを読み取ろう。',
            'answer'=> 'CST{NO_ANAR_CHI}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'17. Challenge Crypto!',
            'lv_lvid'=>'3',
            'content'=>'CTFにはCryptoという暗号分野に関する問題がある。簡単な暗号化には文字コードによる変換がよく用いられる。ファイル「/home/CST-usrXX/question/Challenge_Crypto/encoded_flag」はフラグをROT13→Base64の順でエンコードしたものである。ファイルを復号してフラグを入手しよう。',
            'answer'=> 'CST{cryptograph}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'18. List-List',
            'lv_lvid'=>'3',
            'content'=>'ファイル「/home/CST-usrXX/question/List_List/file.zip」にあるフラグを読み取ろう。',
            'answer'=> 'CST{There_was_no_authority}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'19. Gorilla Virus',
            'lv_lvid'=>'3',
            'content'=>'実行ファイル「/home/CST-usrXX/question/gorilla/gorilla」のSHA256のハッシュ値を調べよう。
            答え方：CST{SHA256のハッシュ値}',
            'answer'=> 'CST{6cf69f754690712023bc75f670e4b69bcd5979444b13edd3c5cb590b71933ccf}',
        ];
        DB::table('questions')->insert($param);
        
        $param = [
            'title'=>'20. Uho! Uho!',
            'lv_lvid'=>'3',
            'content'=>'マルウェアに感染したことによって「/home/CST-usrXX/question/gorilla/」にあるファイル「CST_flag」が暗号化されてしまった。解析によって暗号化アルゴリズムは、同じディレクトリ下のgorilla.shであることがわかっているが「encoded_flag」を復号し答えよ。',
            'answer'=> 'CST{Hello_Gorilla}',
        ];
        DB::table('questions')->insert($param);

     

    }
}