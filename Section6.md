# Section 6 AWS(Amazon Web Services)

このセクションではAWS(Amazon Web Services)を使用したサーバー構築を行ないます。

## 講義関連リンク

* [AWS公式サイト](http://aws.amazon.com/jp/)
* [Cloud Design Pattern](http://aws.clouddesignpattern.org/index.php/%E3%83%A1%E3%82%A4%E3%83%B3%E3%83%9A%E3%83%BC%E3%82%B8)

## 6-0 AWSコマンドラインインターフェイスのインストール

[公式サイト](http://aws.amazon.com/jp/cli/)参照。

## 6-1	AWS EC2 + Ansible

Amazon Elastic Computing Cloud(EC2)を使用してWordpressが動作するサーバーを作ります。

3-1を終了している場合、Ansibleで構築できるようになっているのでAnsibleを使って構築する。
終わってない場合は手動でがんばってね。

### AMI(Amazon Machine Image)を作る

環境の構築が終わったら、AMIを作成します。AMIを作成後、同じマシンを2つ起動して、コピーができていることを確認してください。

## 6-2 AWS EC2(AMIMOTO)

6-1では自力(?)で環境構築を行ない、AMIを作成したが、別の人が作ったAMIを使用してサーバーを起動することもできる。

AMIMOTOのWordpressを起動してWordpressが見れることを確認する。

## 6-3 Route53

Route53はAWSが提供するDNSサービス。

5-1で作ったDNSの情報をRoute53に突っ込んでみよう。

## 6-4 S3

S3はSimple Storage Service。その名の通り、ファイルを保存し、(状況によっては)公開するサービス。

てきとーにWebサイトを作り、それをS3にアップロードし、公開してみよう。

S3にアップロードする際にはAWSコマンドラインインターフェイスを使ってね。

## 6-5 CloudFront

CloudFrontはCDNサービスです。CDNって何って?ggrましょう(ちゃんと講義では説明するので聞いてね)。

6-1で作ったAMIを起動し、CloudFrontに登録します。登録して直接アクセスするのとCloudFront経由するのどっちが速いかベンチマークを取ってみましょう。

また、CloudFrondを経由することで、地域ごとにアクセス可能にしたり不可にしたりできるので、それを試してみましょう。

## 6-6 RDS

RDSは…MySQLっぽい奴です。

RDSを立ち上げて、6-1で作ったAMIのWordpressのDBをRDSに向けてみよう。

## 6-7 ELB

ELBはロードバランサーです。すごいよ。

6-1で作ったAMIを3台ぶんくらい立ち上げてELBに登録し、負荷が割り振られているか確認してみよう。

## 6-8 API叩いてみよう

AWSは自分で作ったプログラムからもいろいろ制御できます!
なんでもいいのでがんばってプログラム書いてみてね(おすすめはSES)。
