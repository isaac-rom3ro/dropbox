#include <stdio.h>

int main() {
  int age = 20;
  float pi = 3.14;
  double amount = 1629.50;
  char letter = 'I';
    
  printf("%d\n", age);
  printf("%.2f\n", pi);
  printf("%lf\n", amount);
  printf("%c\n", letter);
  
  char stringArray[6] = "Hello";

  printf("%s", &stringArray);

  return 0;
}
