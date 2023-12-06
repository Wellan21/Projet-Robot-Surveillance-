#! /bin/bash
gpio write $2 1
gpio write $4 0
gpio pwm $1 100
gpio pwm $3 100
