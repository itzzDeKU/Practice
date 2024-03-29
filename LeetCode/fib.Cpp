class Solution {
public:
    int fib(int n) {
        if(n == 0) return 0;
        else if(n == 1) return 1;
        else return fib(n-1)+fib(n-2);
    }
};

// Optimized Code
class Solution {
public:
    int fib(int N) {
    if(N == 0) return 0;
    if(N == 1) return 1;
    
    int xNm2 = 0;
    int xNm1 = 1;
    int xN = 0;
    
    for(int i = 2; i <= N; i++)
    {
        xN = xNm1 + xNm2;
        xNm2 = xNm1;
        xNm1 = xN;
    }
    
    return xN;
    }
};