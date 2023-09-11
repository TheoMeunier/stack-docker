## Requirement:
- To use this docker stack we need to change the ssh port of our VM to avoid any confusion.
- Open port 22 in reverse proxy

## Configuration:

To configure Gitlab, we need to edit two lines in the `config/gitlab.rb` folder.

```js
nginx['listen_port'] = 80
nginx['listen_https'] = false
```