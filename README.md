# mailstorepermissions

CiviCRM sets `0700` permissions on mail, but this is not always appropriate. I needed `02770`.

This extension uses the [patchwork extension](https://github.com/artfulrobot/patchwork) to maintain a patch on the core file `CRM/Mailing/MailStore.php`.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.0+
* CiviCRM 5.0

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl mailstorepermissions@https://github.com/artfulrobot/mailstorepermissions/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/artfulrobot/mailstorepermissions.git
cv en mailstorepermissions
```
