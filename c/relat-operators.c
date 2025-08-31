#include <stdio.h>

int main() {
  int a = 5;
  int b = 3;

  // Usually in c the returned value of a condition is 0 to false and 1 to true

  printf("%b", a == b);
  printf("%b", a != b);
  printf("%b", a > b);
  printf("%b", a < b);
  printf("%b", a >= b);
  printf("%b", a <= b);
  return 0;
}
