/* This program takes age input from the user
It stores it in the age variable
And, print the value using printf() */

#include <stdio.h>


// main code

int main() {
    
  int age;
  
  printf("Enter the age: ");
  scanf("%d", &age);
 
  printf("Age = %d", age);

  return 0;
}
