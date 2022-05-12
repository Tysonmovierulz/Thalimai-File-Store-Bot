# FiIesBot

Powerful bot for file sharing without any database

- can be found on 👉 [Telegram](https://telegram.dog/GoFiIesBot) 👈


## License: CC0 1.0 Universal (Public Domain)


## Deploying

### The Easy Way

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://dashboard.heroku.com/new?button-url=https%3A%2F%2Fgithub.com%2F&template=https://github.com/Tysonmovierulz/Thalimai-File-Store-Bot)


[![Deploy on Railway](https://railway.app/button.svg)](https://railway.app/new/template/laPcn3?referralCode=jugnucode)




### The Variables

- `TG_BOT_TOKEN`: 
  - get a token by talking to [@BotFather](https://telegram.dog/BotFather)

- `TG_BOT_USERNAME`:
  - your bot username, without the '@' symbol.

- `TG_DUMP_CHANNEL_ID`:
  - create a Telegram Channel.
  - Add your bot, created in previous step to the Telegram Channel, (as an administrator).
  - Send a message in the Telegram Channel.
  - Right Click on the Message > Copy Link.
  - you will get a link in the format: https://t.me/c/12374356/3
  - the value -100 and 12374356 combined without spaces is the value of this KEY.

- `TG_AUTH_USERS`:
  - send `/id` command to [@googleIMGBot](https://telegram.dog/googleIMGBot) to get this value. [ atleast, two users are required ]
  - you can also set `ALL` value in this field, to give everyone access to your File Sharing RoBot.
