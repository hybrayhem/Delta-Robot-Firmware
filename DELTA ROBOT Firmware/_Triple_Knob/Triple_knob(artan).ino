/*

 Controlling a servo position using a potentiometer (variable resistor)

 by Michal Rinott <http://people.interaction-ivrea.it/m.rinott>

 modified on 30 Mar 2019

 by Halil ibrahim ilhan

*/

#include <Servo.h>

Servo myservo;  // create servo object to control a servo

Servo myservo1;

Servo myservo2;

int potpin = 0;  // analog pin used to connect the potentiometer

int potpin1 = 1;

int potpin2 = 2;

int dc = 5;

int val;    // variable to read the value from the analog pin
int newVal=90;
int val1;
int newVal1=90;
int val2;
//int newVal2=90;
void setup() {

  myservo.attach(9);  // attaches the servo on pin 9 to the servo object

  myservo1.attach(10);

  myservo2.attach(11);

}

void loop() {

  val = analogRead(potpin);            // reads the value of the potentiometer (value between 0 and 1023)

  val = map(val, 0, 1023, 0, 180);     // scale it to use it with the servo (value between 0 and 180)
  
  newVal += Int(val/dc);
  

  val1 = analogRead(potpin1);            // reads the value of the potentiometer (value between 0 and 1023)

  val1 = map(val1, 0, 1023, 0, 180);     // scale it to use it with the servo (value between 0 and 180)
  newVal1 += Int(val1/dc);
  if(newVal1=>0&&newVal1=<180&&newVal=>0&&newVal=<180){
    val1 = newVal1;
    val = newVal;
   }
 
  myservo1.write(val1);                  // sets the servo position according to the scaled value
  delay(15);                           // waits for the servo to get there
  myservo.write(val);                  // sets the servo position according to the scaled value
  delay(15);                           // waits for the servo to get there

 
 
  val2 = analogRead(potpin2);            // reads the value of the potentiometer (value between 0 and 1023)

  val2 = map(val2, 0, 1023, 0, 180);     // scale it to use it with the servo (value between 0 and 180)

  myservo2.write(val2);                  // sets the servo position according to the scaled value

  delay(15);                           // waits for the servo to get there

}
