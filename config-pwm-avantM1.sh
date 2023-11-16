#! /bin/bash
gpio mode 1 pwm
gpio write 0 1
gpio pwm-bal
gpio pwmc 1920
gpio pwmr 200
gpio pwm 1 0

