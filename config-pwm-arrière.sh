#! /bin/bash
gpio mode 1 pwm
gpio write 0 0
gpio pwm-bal
gpio pwmc 1920
gpio pwmr 200
gpio pwm 1 0
gpio mode 23 pwm
gpio write 22 0
gpio pwm-bal
gpio pwmc 1920
gpio pwmr 200
gpio pwm 23 0


