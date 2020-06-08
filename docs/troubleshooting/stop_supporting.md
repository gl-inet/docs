# Stop supporting firmware 2.x

_

We will stop support for firmware 2.x since September 10, 2020.

We recomend to upgrade to [firmware 3.x](https://docs.gl-inet.com/en/3/release_notes/), if you still want to use the affected features, just ssh to router, add a line below to hosts file.

`52.41.190.83 www.gl-inet.com`

The host file is at `/etc/hosts`.

The image below show where to add the line.

![modify host file](https://static.gl-inet.com/docs/en/2.x/troubleshooting/src/stop_supporting/modify_host.jpg)

If you don't know how to ssh to router, please refer [here](https://docs.gl-inet.com/en/2/app/ssh/).

If you are using Windows, you can use WinSCP, please refer [here](https://docs.gl-inet.com/en/2/app/ssh/#winscp).

How do I know it is worked?

Try to ping the url `www.gl-inet.com` after September 10, 2020.

If the IP address is `52.41.190.83`, as the image show below, it worked.

![is host worked](https://static.gl-inet.com/docs/en/2.x/troubleshooting/src/stop_supporting/is_host_worked.jpg)