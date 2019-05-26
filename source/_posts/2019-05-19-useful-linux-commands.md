---
extends: _layouts.post
section: content
title: Useful Linux Commands
date: 2019-05-19
description: A collection of useful Linux commands for developers.
categories: [Linux]
featured: false
image: https://source.unsplash.com/Tjbk79TARiE/?fit=max&w=1350
image_thumb: https://source.unsplash.com/Tjbk79TARiE/?fit=max&w=200&q=75
image_author: Sai Kiran Anagani
image_author_url: https://unsplash.com/@_imkiran
image_unsplash: true
---

This is my collection of useful Linux shell commands from the perspective of a developer who is not primarily a sysadmin, yet uses Linux on a daily basis to test and deploy code in local, staging, and production environments.

Many of these are curated from the amazing [Server for hackers](https://serversforhackers.com/) course.

# SSH Commands

## Generate an SSH key

```bash
ssh-keygen -t rsa -C "user@example.com" -b 4096
# optionally add a passphrase
```

## Add an SSH key to your keychain (Mac)

Add a key to the keychain.

```
ssh-add -K ~/.ssh/id_rsa
# enter passphrase
```

List all the keys in your keychain.

```bash
ssh-keygen -l
```

# Copy text to the clipboard

## Mac

```bash
pbcopy < ~/.ssh/id_rsa.pub
# or
cat ~/.ssh/id_rsa.pub | pbcopy
```

## Ubuntu

```bash
cat ~/.ssh/id_rsa.pub | /dev/clipboard
```

# lsb_release

Shows info about the Linux distribution.

```bash
lsb_release -a
 ```

**Sample Output**

```bash
No LSB modules are available.
Distributor ID: Ubuntu
Description:    Ubuntu 18.04.2 LTS
Release:        18.04
Codename:       bionic
```

# uname

Shows system info.

```bash
uname -a
```

**Sample Output**

```bash
Linux thebolapp-staging 4.15.0-1035-aws #37-Ubuntu SMP Mon Mar 18 16:15:14 UTC 2019 x86_64 x86_64 x86_64 GNU/Linux
```

```bash
uname -r
```

**Sample Output**

```bash
4.15.0-1035-aws
```

```bash
uname -i
```

```bash
x86_64
```

# df

Shows file system disk space (`-h` for human-readable file sizes).

```bash
df -h
```

**Sample Output**

```bash
Filesystem      Size  Used Avail Use% Mounted on
udev            985M     0  985M   0% /dev
tmpfs           200M  816K  199M   1% /run
/dev/xvda1       20G  6.9G   13G  36% /
tmpfs           996M     0  996M   0% /dev/shm
tmpfs           5.0M     0  5.0M   0% /run/lock
tmpfs           996M     0  996M   0% /sys/fs/cgroup
/dev/loop0       18M   18M     0 100% /snap/amazon-ssm-agent/1068
/dev/loop2       90M   90M     0 100% /snap/core/6673
/dev/loop3       18M   18M     0 100% /snap/amazon-ssm-agent/930
/dev/loop5       92M   92M     0 100% /snap/core/6531
/dev/loop6       90M   90M     0 100% /snap/core/6818
/dev/loop1       18M   18M     0 100% /snap/amazon-ssm-agent/1335
tmpfs           200M     0  200M   0% /run/user/1001
```

# free

Shows memory + swap usage.

```bash
free -h
```

**Sample Output**

```bash
              total        used        free      shared  buff/cache   available
Mem:           1.9G        704M        361M         17M        925M        1.1G
Swap:          1.0G         39M        984M
```

# ps

Shows currently running processes.

```bash
ps -aux
```

**Sample Output**

```bash
USER       PID %CPU %MEM    VSZ   RSS TTY      STAT START   TIME COMMAND
root         1  0.0  0.4 225480  9072 ?        Ss   Apr09   1:35 /sbin/init
root         2  0.0  0.0      0     0 ?        S    Apr09   0:00 [kthreadd]
root         4  0.0  0.0      0     0 ?        I<   Apr09   0:00 [kworker/0:0H]
root         6  0.0  0.0      0     0 ?        I<   Apr09   0:00 [mm_percpu_wq]
root         7  0.0  0.0      0     0 ?        S    Apr09   3:18 [ksoftirqd/0]
root         8  0.0  0.0      0     0 ?        I    Apr09   9:29 [rcu_sched]
root         9  0.0  0.0      0     0 ?        I    Apr09   0:00 [rcu_bh]
root        10  0.0  0.0      0     0 ?        S    Apr09   0:00 [migration/0]
...
```

# chmod

Change user, group, other permissions.

```bash
chmod u=rwx,g=rx,o=-rwx .ssh

# equivalent to
chmod u+rwx,g+rx,o-rwx .ssh
```

More advanced example:

```bash
chmod u-rw+x,g-rw+x,o-r+wx XXX

# output
---x--x-wx  1 forge forge     0 May 17 19:14 XXX*
```

