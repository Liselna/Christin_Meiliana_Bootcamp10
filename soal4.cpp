#include <iostream>
using namespace std;
int main()
{
    int angka;

    cout <<"Masukkan Angka Ganjil : ";
    cin >> angka;

    for(int i=0; i<angka; i++)
        {
    for(int a=1; a<=angka; a++)
    {
        
            if(i<1 || i == angka-1)
            {
                cout<<"x";
            }

            else if(a == (angka/2)+1)
            {
                cout<<"x";
            }

            else
            {
                cout<<"=";
            }
        }
        cout<<endl;
    }
}
