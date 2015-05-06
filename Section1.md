# Section 1 基本のサーバー構築

## 1-1 CentOS 7のインストール

### VirtualBoxへのインストール

CentOSの公式サイトよりCentOS 7 Minimal ISO(x86_64)のISOファイルをダウンロードし、
VirtualBox上にインストールしてください。

VirtualBoxで作成する仮想マシンのメモリのサイズは1GBにします。また、ストレージの容量は8GB程度に設定してください。

ネットワークアダプター2を設定します。割り当てを「ホストオンリーアダプター」にします。
(ネットワークアダプター1はデフォルト(NAT)で問題ありません)

インストール中に指示されるパーティションの設定は特に指定しません。

インストール中、root以外の作業用(管理者)のユーザーを作成してください。

### ネットワークアダプター1/2へのIPアドレスの設定とssh接続の確認

/etc/sysconfig/network-scriptにifcfg-enp0s?というファイルがあるので、
そのファイルを編集してネットワーク接続ができるように設定します。

DHCPでIPアドレスを取得できますので、[RedHat Enterprise Linux 7のマニュアル(英語)](https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/7/html-single/Networking_Guide/index.html#sec-Configuring_a_Network_Interface_Using_ifcg_Files)を読んで設定してください。

### SSH接続の確認

Ubuntuからsshで仮想マシンに接続できることを確認してください。

(ついでなので、公開鍵認証でログインできるようにしておくといいと思いますよ。必須ではないけど。)

### インストール後の設定

yumやwgetを使用する時のproxyの設定を行なってください。

### アップデート

プロキシの設定後、アップデートができるようになっているのでアップデートを行なってください。

## 1-2 Wordpressを動かす(1)

Wordpressを動作させるためには下記のソフトウェアが必要になります。 [※1](#LAMP)

* Apache HTTP Server
* MySQL
* PHP

これらをyumを使用してインストールし、Wordpressをダウンロード、展開して動作させてください。

Wordpressのインストールは[公式サイトに手順が掲載されています](http://wpdocs.sourceforge.jp/WordPress_%E3%81%AE%E3%82%A4%E3%83%B3%E3%82%B9%E3%83%88%E3%83%BC%E3%83%AB)のでそちらを参考にすると確実かと思います。

なお、ssh接続できるようになっているので、VirtualBoxの画面からではなく、UbuntuからSSHで接続して設定してください。
(そのほうが圧倒的に楽です。)

Wordpressが表示されたら講師に確認してもらってください。また、今のうちに手順をまとめておいてください。

<a name="LAMP">※1</a>: Linux・Apache・MySQL・PHPの頭文字を取ってLAMPといいます。
