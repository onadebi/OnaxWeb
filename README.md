# OnaxWeb
PHP Generic Framework With JQuery, JQueryUi and Bootstrap

using System;

namespace AppTest
{
    class Program
    {
        static void Main(string[] args)
        {
            string variable = "0123456789101112131415!";
            //var newResult = variable.Substring(1,4).Replace()
            // Console.WriteLine("".PadLeft(6, '*')+"PROGRAM"+ String.Concat("".PadRight(6, '*')));
            // Console.WriteLine("Variable length is "+ variable.Length);
            // //Console.WriteLine(String.Concat("".PadLeft(4,'*'), variable.Substring(variable.Length)));
            // Console.WriteLine(String.Format(" The masked output is {0}{1}", String.Concat(String.Empty.PadLeft(6,'*')), variable.Substring(6, variable.Length-6)));
            //LeftHasher(12, variable);
            //Hasher(1,17, variable);
            PrintPrimeNumbers(2, 87);
        }


        static void LeftHasher(int hashCount, string value = "")
        {

            Console.WriteLine("".PadLeft(hashCount, '*') + "PROGRAM" + String.Concat("".PadRight(hashCount, '*')));

            if (value.Length < hashCount)
            {
                Console.WriteLine($"\nValue to be hashed cannot be less than hashCount {hashCount}\n");
            }
            else
            {
                Console.WriteLine("Variable length is " + value.Length);
                //Console.WriteLine(String.Concat("".PadLeft(4,'*'), value.Substring(value.Length)));
                Console.WriteLine(String.Format(" The masked output is {0}{1}", String.Concat(String.Empty.PadLeft(hashCount, '*')), value.Substring(hashCount, value.Length - hashCount)));
            }
        }

        static void Hasher(int hashCountStart, int hashCountEnd, string value = "")
        {

            Console.WriteLine("".PadLeft(hashCountStart, '*') + "PROGRAM" + String.Concat("".PadRight(hashCountStart, '*')));
            if (value.Length < hashCountStart || (hashCountStart + hashCountEnd) > value.Length)
            {
                Console.WriteLine($"\nValue to be hashed is out of bound Start:=> {hashCountStart} or End:=> {hashCountEnd}\n");
            }
            else
            {
                Console.WriteLine("Variable length is " + value.Length);
                string outResult = String.Format("The masked output is {0}", (String.Concat("".PadLeft(hashCountStart, '*'), value.Substring(hashCountStart, value.Length - hashCountStart))).Substring(hashCountEnd, value.Length - hashCountEnd) + "".PadRight(hashCountEnd, '*'));

                Console.WriteLine(outResult);
                var result = outResult.Trim();
                Console.WriteLine(result);
                Console.WriteLine($"Lenght of output is => {result.Length}");
            }

        }

        static void PrintPrimeNumbers(int start, int end)
        {
            if (end - start < 0)
            {
                Console.WriteLine($"Invalid range {start} to {end}");
            }
            else
            {
                bool isPrime = true;
                for (int i = start; i <= end; i++)
                {
                    for (int j = start; j <= end; j++)
                    {
                        if (i != j && i % j == 0)
                        {
                            isPrime = false;
                            break;
                        }
                    }
                    if (isPrime)
                    {
                        Console.Write("\t" + i);
                    }
                    isPrime = true;
                }
                Console.ReadKey();

            }
        }
    }
}



using System;
using System.Collections.Generic;
using System.Linq;

class Program
{
    static void Main()
    {
        List<int> coins = new List<int>();
        List<int> amounts = new List<int>() { 1, 5, 10, 25, 50 };
        //
        // Compute change for 51 cents.
        //
        Change(coins, amounts, 0, 0, 51);
    }

    static void Change(List<int> coins, List<int> amounts, int highest, int sum, int goal)
    {
        //
        // See if we are done.
        //
        if (sum == goal)
        {
            Display(coins, amounts);
            return;
        }
        //
        // See if we have too much.
        //
        if (sum > goal)
        {
            return;
        }
        //
        // Loop through amounts.
        //
        foreach (int value in amounts)
        {
            //
            // Only add higher or equal amounts.
            //
            if (value >= highest)
            {
                List<int> copy = new List<int>(coins);
                copy.Add(value);
                Change(copy, amounts, value, sum + value, goal);
            }
        }
    }

    static void Display(List<int> coins, List<int> amounts)
    {
        foreach (int amount in amounts)
        {
            int count = coins.Count(value => value == amount);
            Console.WriteLine("{0}: {1}",
                amount,
                count);
        }
        Console.WriteLine();
    }
}

Output: partial

1: 51
5: 0
10: 0
25: 0
50: 0

1: 46
5: 1
10: 0
25: 0
50: 0

1: 41
5: 2
10: 0
25: 0
50: 0

1: 41
5: 0
10: 1
25: 0
50: 0

1: 36
5: 3
10: 0
25: 0
50: 0
