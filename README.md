# PHP i18n example

Example project with internationalization with `gettext()` alias `_()`.

Some references:
* https://lingohub.com/blog/2013/07/php-internationalization-with-gettext-tutorial/
* https://php.net/manual/de/function.gettext.php
* [Poedit - Desktop app for PO editing](https://poedit.net/)
* [Workaround for caching problem](https://www.sobstel.org/blog/php-gettext-caching-workaround/)

## Commands
```
cd Locale
```

### Create POT
```
xgettext --from-code=UTF-8 -o messages.pot ../index.php
```
This will overide the existing `messages.pot`. You should create a backup before.

### Create PO
Create a copy of `messages.pot` and save it as `Locale/de_DE/LC_MESSAGES/messages.po`. Set translations (`msgstr`) for each `msgid`.

### Create MO
```
msgfmt de_DE/LC_MESSAGES/messages.po -o de_DE/LC_MESSAGES/messages.mo
```