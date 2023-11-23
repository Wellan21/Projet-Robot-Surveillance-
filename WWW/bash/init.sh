
#! /bin/bash
gpio mode 1 pwm
gpio pwm-bal
gpio pwmc 1920
gpio pwmr 200
gpio mode 23 pwm
gpio mode 0 out
gpio mode 22 out

