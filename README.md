# ExtendGenisys
Extended Genisys to you PocketMine-Server

## Extended APi

### Features
- Enable or Disable Fly to All Player(pl.yml)
- Banned for IP or NickName message(pl.yml)

### Folders
- \extends-api\pl.yml

### For Devs
##### Code:
```php
Server::getInstance()->extendsapipl->get(" ");
```
##### Example:
```php
$sender->sendMessage(Server::getInstance()->extendsapipl->get("banned.message"));
```

#### Configs:
```php
Config | Config to get |
pl.yml: extendsapipl
```
