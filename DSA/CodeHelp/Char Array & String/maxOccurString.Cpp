char getmaXOccuringChar(string str)
{

    int arr[26] = {0};

    for (int i = 0; i < str.length(); i++)
    {
        char ch = str[i];
        int number = 0;

        // lowercase
        if (ch >= 'a' && ch <= 'z')
            number = ch - 'a';
        // uppercase
        else
            number = ch - 'A';
        arr[number]++;
    }

    int maxi = -1, ans = 0;
    for (int i = 0; i < 26; i++)
    {
        if (maxi < arr[i])
        {
            ans = i;
            maxi = arr[i];
        }
    }

    return 'a' + ans;
}