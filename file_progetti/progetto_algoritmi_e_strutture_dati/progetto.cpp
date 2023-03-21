
#include <queue>
#include <iostream>
#include <fstream>
#include <vector>
#include <stdlib.h>
#include <stack>
using namespace std;
int visita(int inizio,int fine,int radice,int numarchi,int& riferimentoantenato);
void erodoss(int radice);
int controlloantenato(int riferimentoantenatoinizio,int riferimentoantenatofine,int narchi);



void DFS(int u,int &time);//il ft e dt sono gi� messi globali
vector<vector<int> > adj;
vector <int>erodos;
vector <int>genitore;
vector <int>dt;
vector <int>ft;

int times=0;
bool vf=false;//per erdos faccio partire solo una volta

int N,M,Q,maxi;


//dfs circolare variabili usate



int main(){
  ifstream in("input19.txt");

  //ifstream in("input0 - Copia.txt");

   ofstream out("output20.txt");
   ifstream outverifica("output19.txt");


  in >> N >> M>>Q;
  adj.resize(N);
  dt.resize(N);
  ft.resize(N);

    maxi=N+1;

erodos.resize(N);
    genitore.resize(N);
    for(int i=0;i<N;i++){
        if(i!=0){
            erodos[i]=N+1;
        } else
            erodos[i]=0;

    }


  for(int j=0; j<M; j++) {
    int from, to;
    in >> from >> to;
    adj[from].push_back(to);
    adj[to].push_back(from);
  }

  /*for(int i=0; i<N; i++) {
    cout << "Nodo " << i << " ha " << adj[i].size() << " vicini" << endl;
    for(int j=0; j<adj[i].size(); j++) {
      cout << "  " << adj[i][j] << endl;
    }
  }*/


    int variabiletemporaneanum;
    int nn;
  int inizio,fine;



    //cout<<"fine"<<endl;
    erodoss(0);//radice 0
    DFS(0,times);
    /*for(int i=0;i<N;i++){

        cout<<i<<" "<<genitore[i]<<" "<<dt[i]<<" "<<ft[i]<<" "<<erodos[i]<<endl;
    }*/


    int riferimentoantenatoinizio=0,riferimentoantenatofine=0;
    int risultatofinale=0;
      for(int richiesta=0;richiesta<Q;richiesta++){
        in>>inizio>>fine;
        //int visita(int inizio,int fine,int radice,int numarchi,int& riferimentoantenato);
       /* variabiletemporaneanum=visita(inizio,fine,0,0,riferimentoantenatoinizio);
    cout<<"soluzione trovata prima parte= "<<variabiletemporaneanum<<" "<<inizio<<" "<<fine<<" "<<riferimentoantenatoinizio<<" "<<riferimentoantenatofine<<endl;
        variabiletemporaneanum=visita(fine,inizio,0,0,riferimentoantenatofine);
        cout<<"soluzione trovata seconda parte= "<<variabiletemporaneanum<<" "<<inizio<<" "<<fine<<" "<<riferimentoantenatoinizio<<" "<<riferimentoantenatofine<<endl;
        variabiletemporaneanum=visita(inizio,fine,0,0,riferimentoantenatoinizio)+visita(fine,inizio,0,0,riferimentoantenatofine);
        variabiletemporaneanum=controlloantenato(riferimentoantenatoinizio,riferimentoantenatofine,variabiletemporaneanum);
         cout<<"soluzione trovata= "<<variabiletemporaneanum<<" "<<inizio<<" "<<fine<<" "<<riferimentoantenatoinizio<<" "<<riferimentoantenatofine<<endl;
*/
        //cout<<visita(inizio,fine,0,0,riferimentoantenatoinizio)<<" "<<visita(inizio,fine,0,0,riferimentoantenatofine)<<endl;

    outverifica>>nn;
    variabiletemporaneanum=visita(inizio,fine,0,0,riferimentoantenatoinizio);
    //cout<<"soluzione trovata prima parte= "<<variabiletemporaneanum<<" "<<inizio<<" "<<fine<<" "<<riferimentoantenatoinizio<<" "<<riferimentoantenatofine<<endl;
    risultatofinale=visita(fine,inizio,0,0,riferimentoantenatofine);
    //cout<<"soluzione trovata seconda parte= "<< risultatofinale<<" "<<inizio<<" "<<fine<<" "<<riferimentoantenatoinizio<<" "<<riferimentoantenatofine<<endl;
    variabiletemporaneanum+=risultatofinale;
        variabiletemporaneanum=controlloantenato(riferimentoantenatoinizio,riferimentoantenatofine,variabiletemporaneanum);
      //   cout<<"soluzione trovata= "<<variabiletemporaneanum<<" "<<inizio<<" "<<fine<<" "<<riferimentoantenatoinizio<<" "<<riferimentoantenatofine<<endl;

   if(nn==variabiletemporaneanum){
            out<<variabiletemporaneanum<<endl;
    //cout<<"soluzione trovata giusta= "<<variabiletemporaneanum<<" "<<inizio<<" "<<fine<<" "<<endl;
    } else{
    //cout<<"errore";
    cout<<" soluzione trovata errata= "<<variabiletemporaneanum<<" vero risultato-> "<<nn<<" "<<inizio<<" "<<fine<<" "<<riferimentoantenatoinizio<<" "<<riferimentoantenatofine<<endl;

    richiesta=Q;
    }

   // out<<variabiletemporaneanum<<endl;
  }







  return 0;
}
int visita(int inizio,int fine,int radice,int numarchi,int& riferimentoantenato){
    int n=0;
    bool controllo=true;



    //cout<<"nodo ora inizio= "<<inizio<<endl;


    if(dt[inizio]<=dt[fine]&&ft[inizio]>=ft[fine]){
    n=numarchi;
    riferimentoantenato=inizio;
    vf=false;
    /*cout<<riferimentoantenato<<" prima cosa condizione"<<riferimentoantenato<<endl;
    cout<<inizio<<" nodi "<<fine<<" "<<n<<endl;
cout<<dt[inizio]<<" dt "<<dt[fine]<<" "<<n<<endl;
cout<<ft[inizio]<<" ft "<<ft[fine]<<" "<<n<<endl;
cout<<erodos[inizio]<<" erdos "<<erodos[fine]<<" archi= "<<numarchi<<endl<<endl;
*/

    return n;



    }
    else if(dt[genitore[inizio]]<=dt[fine]&&ft[genitore[inizio]]>=ft[fine]){
         n=numarchi;
        riferimentoantenato=inizio;
        vf=false;
       /* cout<<riferimentoantenato<<" seconda cosa condizione"<<riferimentoantenato<<endl;
            cout<<inizio<<" nodi "<<fine<<" "<<n<<endl;
cout<<dt[inizio]<<" dt "<<dt[fine]<<" "<<n<<endl;
cout<<ft[inizio]<<" ft "<<ft[fine]<<" "<<n<<endl;
cout<<erodos[inizio]<<" erdos "<<erodos[fine]<<" archi= "<<numarchi<<endl<<endl;
*/
        return n;




    }
    if(controllo&&genitore[inizio]!=radice){
            //cout<<"nviosnvsio  "<<numarchi<<endl;
        n=visita(genitore[inizio],fine,0,numarchi+1,riferimentoantenato);
    }



/*cout<<inizio<<" nodi "<<fine<<" "<<n<<endl;
cout<<dt[inizio]<<" dt "<<dt[fine]<<" "<<n<<endl;
cout<<ft[inizio]<<" ft "<<ft[fine]<<" "<<n<<endl;
cout<<erodos[inizio]<<" erdos "<<erodos[fine]<<" archi= "<<numarchi<<endl<<endl;
*/

return n;
    }

    int controlloantenato(int riferimentoantenatoinizio,int riferimentoantenatofine,int narchi){
        int n=0;
           /* if((riferimentoantenatoinizio==0&&riferimentoantenatofine!=0)&&(riferimentoantenatoinizio!=0&&riferimentoantenatofine==0)){//problema che figlio e genitore sono uguali
                narchi++;
                cout<<"narchi->"<<narchi<<endl;
            }
            else if(riferimentoantenatoinizio==riferimentoantenatofine){

            */
            //cout<<"                        narchi ->"<<narchi<<endl;
         if((dt[riferimentoantenatoinizio]<dt[riferimentoantenatofine]&&ft[riferimentoantenatoinizio]>ft[riferimentoantenatofine])||
           (dt[riferimentoantenatoinizio]>dt[riferimentoantenatofine]&&ft[riferimentoantenatoinizio]<ft[riferimentoantenatofine]))
            {


                //&&genitore[riferimentoantenatoinizio]==genitore[riferimentoantenatofine]){
           narchi++;
           }


        else if(genitore[riferimentoantenatoinizio]==genitore[riferimentoantenatofine]&&riferimentoantenatofine!=0&&riferimentoantenatoinizio!=0){//0 � la radice
            narchi+=2;

           }
           else if (genitore[riferimentoantenatoinizio]==genitore[riferimentoantenatofine]&&(riferimentoantenatofine==0||riferimentoantenatoinizio==0)){

            narchi+=1;


           }


           else if((dt[genitore[riferimentoantenatoinizio]]<dt[riferimentoantenatofine]&&ft[genitore[riferimentoantenatoinizio]]>ft[riferimentoantenatofine])||
           (dt[riferimentoantenatoinizio]>dt[genitore[riferimentoantenatofine]]&&ft[riferimentoantenatoinizio]<ft[genitore[riferimentoantenatofine]]))
            narchi+=2;


    return narchi;
    }





void erodoss(int radice){
stack <int > coda;

    erodos.resize(N);
    genitore.resize(N);




    int num=0;
    coda.push(radice);
    while(!coda.empty()){
        num=coda.top();
        coda.pop();
        for(int i=0;i<adj[num].size();i++){

                if(erodos[adj[num][i]]==maxi){
                erodos[adj[num][i]]=erodos[num]+1;
                coda.push(adj[num][i]);
                genitore[adj[num][i]]=num;


                }

            }


        }
    }

    void DFS(int u,int &time){
    time++;
    dt[u]=time;
   // cout<<dt[u]<<" "<<u<<endl;
    for(int i=0;i<adj[u].size();i++){
        if(dt[adj[u][i]]==0){





            DFS(adj[u][i],time);
        }


    }
    time++;
    ft[u]=time;



    }


