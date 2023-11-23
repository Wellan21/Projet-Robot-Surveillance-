#! /bin/bash
gpio write $2 1 
gpio write $4 1 
gpio pwm $1 $5 
gpio pwm $3 $5
