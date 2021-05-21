class Student
{
   private int id;
   private String name;
   private String address;
 
       public void setid(int id)
  {
       this.id=id;
  }
       public int getid()
  {
       return id;
  }
       public void setname(String name)
  {
       this.name=name;
  }
       public String getname()
  {
       return name;
  }
     public void setaddress(String address)

  {
     this.address=address;
  }
    public String getaddress()
  {
     return address;
  }
}

class Teacher extends Student
{
        private double salary;
        public void setsalary(double salary)
 {
     this.salary=salary;
 }
       public double getsalary()
 {
    return salary;
 }
}

class HOD extends Student
{
   private String dep;
   private double salary;
 public void setdep(String dep)
{
   this.dep=dep;
}
 public String getdep()
{
   return dep;
}
 public void setsalary(double salary)
 {
     this.salary=salary;
 }
  public double getsalary()
 {
    return salary;
 }
}
class HODTest1
{
   public static void main(String args[])
{
    HOD h = new HOD();
    Teacher t = new Teacher();

    h.setid(1);
    h.setname("PRATHAMESH");
    h.setaddress("ANDHERI");
    h.setsalary(452154);
    h.setdep("COMPS");

    t.setid(2);
    t.setname("PRATHAM");
    t.setaddress("ANDHERI");
    t.setsalary(456254);

    System.out.println("id :"+h.getid()); 
    System.out.println("name :"+h.getname()); 
    System.out.println("address :"+h.getaddress()); 
    System.out.println("salary :"+h.getsalary()); 
    System.out.println("dep :"+h.getdep()); 

    

    System.out.println("id :"+t.getid()); 
    System.out.println("name :"+t.getname()); 
    System.out.println("address :"+t.getaddress()); 
    System.out.println("salary :"+t.getsalary()); 

}


}
