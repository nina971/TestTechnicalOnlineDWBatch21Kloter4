/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
import java.util.Scanner;
public class Main {

    /**
     * @param args the command line arguments
     */
    static String[] huruf = {"","Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan","Sepuluh","Sebelas"};
    public static void main(String[] args) {
        // TODO code application logic here
        
        Scanner input = new Scanner(System.in);
        
        //harga coca -cola 4.000
        //harga pepsi 4.500
        //fanta 3.500
        int hargaCocaCola = 4000;
        int hargaPepsi = 4500;
        int hargaFanta = 3500;
        int uang;
        long perak = 500;
        long lembar1 = 2000;
        long lembar2 = 5000;
        long lembar3 = 10000;
        long lembar4 = 50000;
        long lembar5 = 100000;
        long lembar6 = 20000;
        
        int cocaCola, pepsi, fanta, jumlah,total;
        long kembalian,pecahan1,pecahan2,pecahan3,pecahan4,pecahan5,pecahan6,pecahan7,sisa1,sisa2,sisa3,sisa4,sisa5,sisa6,sisa7;
        
        System.out.print("Masukan jumlah coca-cola ");
        cocaCola = input.nextInt();
        System.out.print("Masukan jumlah pepsi");
        pepsi = input.nextInt();
        System.out.println("Masukan uang anda");
        uang = input.nextInt();
        
        jumlah = cocaCola + pepsi;
        System.out.println("Minuman Coca- cola sebanyak "+cocaCola+" buah,"+"Pepsi sebanyak "+pepsi+" buah,"+"uang yang dimasukkan adalah "+uang);
        
        System.out.println("Coca-cola = "+"Rp "+hargaCocaCola+"*"+cocaCola);
        System.out.println("Pepsi = "+"Rp "+hargaPepsi+"*"+pepsi);
        System.out.println("Jumlah = "+jumlah);
        //hitung total
        total = (hargaCocaCola * cocaCola) + (hargaPepsi * pepsi);
        System.out.println("Total = "+"Rp "+total);
        System.out.println("Dibayar = "+"Rp "+uang);
        //hitung kembalian
        kembalian = uang - total;
        System.out.println("Kembalian = "+"Rp "+kembalian +" "+new Main().angkaToTerbilang(kembalian)+" Rupiah");
        
        
        //kembalian
        pecahan1 = kembalian /lembar5;
        sisa1 = kembalian%lembar5;
        pecahan2 =  sisa1 / lembar4;
        sisa2 =  sisa1 % lembar4;
        pecahan3 =  sisa2 / lembar6;
        sisa3 =  sisa2 % lembar6;
        pecahan4 =  sisa3 / lembar3;
        sisa4 =  sisa3 % lembar3;
        pecahan5 =  sisa4 / lembar2;
        sisa5 =  sisa4 % lembar2;
        pecahan6 =  sisa5 / lembar1;
        sisa6 = sisa5 % lembar1;
        pecahan7 =  sisa6 / perak;
        sisa7 =  sisa6 % perak;
        
        System.out.println("Kembalian:");
        System.out.println(pecahan7+" Uang Coin Rp 500");
        System.out.println(pecahan6+"  Lembar Uang Rp 2.000");
        System.out.println(pecahan5+"  Lembar Uang Rp 5.000");
        System.out.println(pecahan4+"  Lembar Uang Rp 10.000");
        System.out.println(pecahan3+"  Lembar Uang Rp 20.000");
        
    }
    //konversi teribilang
    public static String angkaToTerbilang(Long kembalian){
        if(kembalian<12)
            return  huruf[kembalian.intValue()];
        if(kembalian >= 12 && kembalian <= 9)
            return huruf[kembalian.intValue() % 10] + " Belas";
        if(kembalian >= 20 && kembalian <= 99)
            return  angkaToTerbilang(kembalian / 10) + " Puluh" + huruf[kembalian.intValue() % 10];
        if(kembalian >= 100 && kembalian <= 199)
            return "Seratus "+angkaToTerbilang(kembalian % 100);
        if(kembalian >= 200 && kembalian <= 999)
            return angkaToTerbilang(kembalian / 100) + " Ratus "+angkaToTerbilang(kembalian % 100);
        if(kembalian >= 1000 && kembalian <= 1999)
            return "Seribu "+angkaToTerbilang(kembalian % 1000);
        if(kembalian >= 2000 && kembalian <= 999999)
            return angkaToTerbilang(kembalian / 1000) + " Ribu "+angkaToTerbilang(kembalian % 1000);
        return  " ";
    }
    
}
