#! /bin/bash
gpio mode 23 pwm
gpio write 22 1
gpio pwm-bal
gpio pwmc 1920
gpio pwmr 200
gpio pwm 23 0

