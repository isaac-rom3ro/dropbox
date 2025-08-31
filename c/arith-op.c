#include <stdio.h>

int main() {
  int a = 1;
  int b = 1;

  float x = 10;
  float y = 5;
  
  float result = 5.0 / 3;

  printf("%f\n", x / y); // Even if the variable is set to float, the / as standard executes integer operations  
  printf("%f", result); // in order to change it, not truncate the decimal part,

  printf("\n%b", 20 % 2 == 0);

  return 0;
}
