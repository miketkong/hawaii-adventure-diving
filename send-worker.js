addEventListener("fetch", (event) => {
  event.respondWith(handleRequest(event.request));
});

async function handleRequest(request) {
  if (request.method !== "POST") {
    return new Response("Method Not Allowed", { status: 405 });
  }

  const formData = await request.formData();
  const yourName = formData.get("yourName")?.trim() || "Anonymous";
  const yourEmail = formData.get("yourEmail")?.trim() || "";
  const yourPhone = formData.get("yourPhone")?.trim() || "";
  const yourMessage = formData.get("yourMessage")?.trim() || "";
  const requiredContact = formData.get("requiredContact") || "";

  if (requiredContact) {
    return new Response("Form submission rejected.", { status: 400 });
  }

  const options = {
    timeZone: "Pacific/Honolulu",
    hour12: true,
  };
  const currentDay = new Intl.DateTimeFormat("en-US", {
    month: "long",
    day: "numeric",
    year: "numeric",
    timeZone: "Pacific/Honolulu",
  }).format(new Date());
  const currentTime = new Intl.DateTimeFormat("en-US", {
    hour: "numeric",
    minute: "2-digit",
    timeZone: "Pacific/Honolulu",
    hour12: true,
  }).format(new Date());

  const htmlContent = `
    <html>
      <body>
        <p>Sent ${currentDay} at ${currentTime}</p>
        <p>${yourName} says: ${yourMessage}</p>
        <p>Email: ${yourEmail}<br />Phone: ${yourPhone}</p>
      </body>
    </html>`;

  const payload = {
    personalizations: [
      {
        to: [
          { email: "mike@mkdesignmarketing.com" },
          { email: "nickloewenstine@gmail.com" },
        ],
        subject: "New Customer Message: Adventure Diving Website",
      },
    ],
    content: [
      {
        type: "text/html",
        value: htmlContent,
      },
    ],
    from: {
      email: yourEmail || "no-reply@hawaiiadventurediving.com",
      name: yourName,
    },
    reply_to: {
      email: yourEmail || "no-reply@hawaiiadventurediving.com",
    },
  };

  const sendGridApiKey = SENDGRID_API_KEY;
  if (!sendGridApiKey) {
    return new Response("SendGrid API key not configured.", { status: 500 });
  }

  const response = await fetch("https://api.sendgrid.com/v3/mail/send", {
    method: "POST",
    headers: {
      Authorization: `Bearer ${sendGridApiKey}`,
      "Content-Type": "application/json",
    },
    body: JSON.stringify(payload),
  });

  if (!response.ok) {
    const errorText = await response.text();
    return new Response(`SendGrid error: ${errorText}`, {
      status: response.status,
    });
  }

  return Response.redirect("/message-sent/", 302);
}
