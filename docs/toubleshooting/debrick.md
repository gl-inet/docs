# Using Uboot to Debrick Your Router

You may brick your router if you were doing some DIY projects or flashed a wrong firmware. You are not able to access your router but you can re-install the firmware by using Uboot failsafe.



Please follow the procedures below to access the Uboot Web UI and re-install the firmware:

---



1. Connect **only one** cable to your router, and leave **the other port (LAN or WAN) unconnected**.



2. Press and hold the *Reset* button firmly first, and then power on your device. **Must obey the first and then procedure**.



3. The LEDs will start blinking.



4. Release your finger when you see the LEDs flashing:
   - 5 times for AR150 and AR300M16

   - 3 times for MT300N, MT300A, B1300



5. Set your computer’s IP address to **192.168.1.2** (see the cap-screen of Win 7 below)

   ![](src/uboot/set_ip.jpg)



6. User Firefox or Chrome to visit **http://192.168.1.1.** Then you will enter Uboot Web UI.

   ![](src/uboot/ui.jpg)



7. Click **Choose File** to find the firmware. Then click **Update firmware**. You can download the firmware here: <http://www.gl-inet.com/firmware>



8. Wait for around 3 minutes. Don’t power off your device while upgrading. Revert the IP setting you did in step 5 and you will be able to access the router via 192.168.8.1 again.