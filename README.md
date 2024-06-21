void main() {
  print("Hello world");
    var temp1 = 2;
    var temp2 = 2.2;
    var temp3 = 'Fluter is easy';
  print("temp1 = $temp1");
  print("temp2 = $temp2");
  print("temp3 = $temp3");

  f1();
  f2("Fluter");
  var sum =f3(3,4);
  print("sum = $sum");
  greet();
  greet(name: 'chatsadaphon');
  print("result = ${multiply(3)}");
  print("result = ${multiply(3,3)}");
  print("result = ${multiply(3*3)}");
  var add = (int a,int b) => a+b;
  print("Result ${add(3,5)}");
  print(add(3,5));
}

void f1(){
  print("Test Funtion");
}
void f2(String k1){
  print("Result = $k1 ");
}
int f3 (int a, int b){
  return a+b;
}
void greet({String name='Guest'}){
  print('Hallo $name');
}
int multiply (int a, [int b = 2]){
  return a*b;
}
