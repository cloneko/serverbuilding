# Section 5 DNSサーバーを動作させる

インターネットにおいて、これが無いとほぼ成り立たないのがDNSサーバー。
最近は特に不人気なんだけど、一応基本のDNSサーバーであるbindを設定してみよう。

## 5-1 bindのインストール

yumで入るので適当にインストールしてください。

ansible化しとくと楽ですよ。

## 5-2 bindの設定

chroot化&自分のゾーンを作ってレコードを返すように設定してください。

[RHEL7のNetworking Guide(英語)](https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/7/html/Networking_Guide/sec-BIND.html)にやり方書かれてるのでそれを参考に設定してください。

また、ゾーン転送を行なって、ミラーリングができていることを確認してください(そのためには2台の仮想マシンが必要になります)
