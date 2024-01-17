  paypal.Messages({
    buyerCountry: "DE",
    amount: 120,
    placement: "cart",
    style: {
      layout: 'text',
        text: {
        size: "11",
        align: "center",
      },
      logo: {
        type: ""
      }
    }
  }).render(".pp-message");