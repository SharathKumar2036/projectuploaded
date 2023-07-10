public class HelloWorld{
    public static void main(String []args){
        for(int i=1;i<=4;i++){
            for(int j=i;j<=4;j++){
               System.out.print(j);
               if(j==4 && i!=1){
                   for(int k=1;k<i;k++) System.out.print(k);
               }
            }
            System.out.println("");
        }    
    
       
        
        }
     
}
{
        int n = prices.size();
        vector<int>maxfut (n,0);
        int m = prices[n-1];
        for(int i=n-2;i>=0;i--){
            maxfut[i] = m;
            m = max(prices[i],m);
        }
        if(n==2){
            if(prices[0]>prices[1]){
                maxfut[0] = prices[0];
                maxfut[1] = prices[1];
                
            }
            else{
                maxfut[0] = prices[1];
                maxfut[1] = prices[0];
                
            }
        }
        int ans=0;
        for(int i =1;i<n-1;i++){
            int prof = maxfut[i] - prices[i];
            if(prof>ans) ans = prof;
            //ans = max(ans,prof);
            
        }
        return ans;
    }
};