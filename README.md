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
