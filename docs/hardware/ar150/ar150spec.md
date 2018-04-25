# 	GL-AR150 Series




## Hardware Specification

|             Model             |                 GL-AR150                 |
| :---------------------------: | :--------------------------------------: |
|              CPU              |           Atheros 9331 400MHz            |
|            Memory             |                DDRII 64Mb                |
|            Storage            |                16Mb flash                |
|          Interfaces           | 1 WAN, 1 LAN, 1 USB2.0, 1 Micro USB (power), 1 Reset Button, UART |
|           Frequency           |                  2.4GHz                  |
|       Transmission Rate       |                 150Mbps                  |
|         Max. Tx Power         |                  18dBm                   |
|           Protocol            |               802.11 b/g/n               |
| External Drive Format Support |     FAT32/NTFS/exFAT/EXT4/EXT3/EXT2      |
|        Webcam Support         |                MJPEG, YUV                |
|         DIY Features          |    UART, GPIO,  3.3V & 5V power port     |
|   External Antenna Support    |                   Yes                    |
|      PoE Module Support       |                   Yes                    |
|          Power Input          |                  5V/1A                   |
|       Power Consumption       |                  <1.5W                   |
|       Dimension, Weight       |           58mmX58mmX25mm, 39g            |



##PCB Pinout

![](src\AR150-V4.4-PINOUT.jpg)

## Using RTC (Realtime control) in GL-AR150

![](src\rtc_1200x1200.jpg)

### Install kernel modules

If you use our stock firmware, you can just install using `opkg`

```
opkg update
opkg install kmod-i2c-gpio-custom
opkg install kmod-rtc-ds1307
```

If you want to compile your own firmware, choose these packages:

```
Kernel modules  --->  I2C support  --->  kmod-i2c-gpio-custom
Device Drivers  --->  Real Time Clock  --->  Dallas/Maxim DS1307/37/38/39/40, ST M41T00, EPSON RX-8025
```

### Software

The GPIO used for RTC is below:

`SDA` <--> `GPIO1`
`SCL` <--> `GPIO17`

Now you need in insert kernel modules and connect to the module

```
insmod /lib/modules/3.18.29/i2c-gpio-custom.ko bus0=0,1,17
echo ds1307 0x68 > /sys/bus/i2c/devices/i2c-0/new_device
```

To read the time from RTC module

```
hwclock -r
```

To sync the RTC module's time to mini router

```
hwclock -s
```

To write mini router's time to RTC module

```
hwclock -w
```





## PoE Setting

You can only apply one power supply method at one time, either via PoE(Power over Ethernet) or micro USB Power. The compatible passive or active PoE injector should be 48V 802.3af 

PoE only works on the ***WAN Port***

![](src\AR150-PoE_setup.png)

PoE Setup Sample: 

![](src\white_1000x1000_PoE_2.jpg) 







