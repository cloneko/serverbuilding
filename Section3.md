# Section 3 Ansibleによる自動化とテスト

毎回毎回手動で

    yum install もにょもにょ

とやるのも非効率なので、それらを自動化してくれるツールを使って今迄の作業を何回でもできるようにします。

今回の講義ではAnsibleを使用します。

## 3-0 Ansibleのインストール

[公式サイト](http://docs.ansible.com/intro_installation.html#latest-releases-via-apt-ubuntu)に手順載ってるのでそのとおりにやってください。

## 3-1 ansibleでWordpressを動かす(2)を行なう

2-1でWordpressをNginx + PHP + MariaDBでインストールした手順をAnsibleのPlaybookで実行するように記述し、動かしてみてください。
