// Install the C# / .NET helper library from twilio.com/docs/csharp/install

using System;
using Twilio;
using Twilio.Rest.Api.V2010.Account.IncomingPhoneNumber;


class Program 
{
    static void Main(string[] args)
    {
        // Find your Account Sid and Token at twilio.com/console
        const string accountSid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
        const string authToken = "your_auth_token";

        TwilioClient.Init(accountSid, authToken);

        var assignedAddOn = AssignedAddOnResource.Create(
            installedAddOnSid: "XEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
            pathResourceSid: "PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
        );

        Console.WriteLine(assignedAddOn.Sid);
    }
}
