# Section 2 その他のWebサーバー環境

## 2-1 Vagrantを使用したCentOS 6.5環境の起動

サーバーを構築するたびにOSのインストールからやってられないので事前に用意したCentOS 6.5の環境をVagrantで起動します。

### Vagrantで起動できるCentOS 6.5のイメージを登録

USBストレージにVagrant用CentOS boxを用意してありますので登録して使用します。

    vagrant box add CentOS65 コピーしたboxファイル --force

### Vagrantの初期設定

作業用ディレクトリを作成し、その中で初期設定を行ないます。

   vagrant init

上記コマンドを実行するとVagrantfileというファイルが作成されます。このファイルにVagrantの設定が書かれています。
そのままではデフォルトのOS(存在しない)を起動してしまうので、CentOS6.5を起動するようにします。

viでVagrantfileを開き、

    config.vm.box = "base"
d
と書かれているのを

    config.vm.box = "CentOS65"

とします。ここで指定するものはvagrant box addで指定したものの名前(上記の例だとCentOS7)を指定します。

### 仮想マシンの起動

    vagrant up

### 仮想マシンの停止

    vagrant halt

### 仮想マシンの一時停止

    vagrant suspend

### 仮想マシンの破棄

最初からやり直したい…そんな時に破棄するとCentOSが初期化されます。
また`vagrant up`をすると立ち上がります…

    vagrant destroy

### 仮想マシンへ接続

実際の仮想マシンへはsshで接続します。

    vagrant ssh

### ホストオンリーアダプターの設定

サーバーを設定したあと、動作確認するために接続するためのIPアドレスを設定します。
また、そのためのNICを追加します。

Vagrantfileの

    Vagrant.configure(2) do |config|

から一番最後の

    end

の間に

    config.vm.network :private_network, ip:"192.168.56.129"

と書くと仮想マシンのNIC2に192.168.56.129のIPアドレスが振られます。
`config.vm.box = "CentOS7"` の下にでも書くといいと思います。

※ 当然のことながら、複数台の仮想マシンを立ち上げる時には異なるIPアドレスを割り当てる必要があります。

### Vagrantfileの反映

Vagrantfileで変更した設定を反映させるには

    vagrant reload

すると反映されます。ただし、再起動されますので注意してね。

## 2-2 Wordpressを動かす(2)

1-2ではWordpressをApache + PHP + MySQLで動作させたが、今度はNginx + PHP + MariaDBで動作させます。

Nginxはディストリビューターからrpmが提供されていないため、リポジトリを追加する必要があります。
[公式サイト](http://nginx.org/en/linux_packages.html#stable)からリポジトリ追加用のrpmをダウンロードしてインストールしてください。

その後yumでインストールできるようになります。

NginxでPHPを動かすにはコツが必要ですのでがんばって検索して動かしてください。
ヒントは **Nginx php-fpm** です。

## 2-3 Wordpressを動かす(3)

1-2や2-2では提供されているrpmファイルを使用してLAMP/Nginx + PHPの環境を構築しましたが、
提供されていないバージョンを使用して環境を構築する必要がある時もあります。

そういう場合はソースコードをダウンロードしてきて自分でコンパイルして動作させます。

Apache HTTP Server 2.2とPHP5.5の環境を構築し、Wordpressを動かしてください。
(MySQL/MariaDBはrpm版を使ってもOKです)

その時は別のVagrantfile(作業ディレクトリ)を作ってやってくださいね。

## 2-4 ベンチマークを取る

サーバーの性能測定のためにベンチマークを取ることがあります。

[別ページ](misc/Benchmark.md)にまとめてありますのでそちらを参照してください。

## 2-5 セキュリティチェック

サーバーを構築したとしても、セキュリティがガバガバではいろんな意味で駄目です。
Webアプリケーションの脆弱性を突かれたり、設定したサーバーに脆弱性があったりした場合、
情報漏洩とか乗っ取りとか踏み台とかされるとアレです。

定期的にセキュリティチェックを行なう必要があります。

(やり方は[別ページ](misc/SecurityScan.md))

セキュリティチェックを行ない、不具合があるようでしたら修正を行なって再度セキュリティチェックを行ないます。
(可能な限り不具合がなくなるまでチェック&fixを行ないます。)
