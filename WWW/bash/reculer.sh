#! /bin/bash
gpio write $2 0 
gpio write $4 0 
gpio pwm $1 $5 
gpio pwm $3 $5
