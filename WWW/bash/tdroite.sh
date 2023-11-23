#! /bin/bash
gpio write $2 0
gpio write $4 1
gpio pwm $1 100
gpio pwm $3 100
