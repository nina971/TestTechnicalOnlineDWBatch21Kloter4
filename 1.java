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
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner input = new Scanner(System.in);
        int bil, awal,akhir;
        System.out.println("Menampilkan bilangan Prima :");
        System.out.print("Isikan 2 buah angka :");
        awal = input.nextInt();
        System.out.print("dan");

        akhir = input.nextInt();
        System.out.println("======================================================================");
        for (int i = awal; i <= akhir; i++) {
            bil = 0;
            for (int j = 1; j <= i; j++) {
                if(i%j==0){
                    bil=bil+1;
                }
            }
            if(bil==2){
                System.out.print(i+" ");
            }
        }
    }
    
}
