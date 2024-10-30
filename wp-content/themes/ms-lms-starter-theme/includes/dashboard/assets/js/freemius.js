window.addEventListener('load', () => {
  const $ = jQuery
  const handler = FS.Checkout.configure({
		plugin_id: '16465',
		plan_id: '27492',
		public_key: 'pk_1a5d1ac7060675e58a0ad41379efc',
		image: '',
	})

  function handlerPurchase(event, $this, freemiusFromUrl = '') {
    let name = 'Stylemix'
    let licenses = $this.data('license')
    let billing_cycle = $('.period-choices')
      .find('.period-choice.active')
      .data('period')
    if (typeof freemiusFromUrl === 'object') {
      licenses = freemiusFromUrl.licenses
      billing_cycle = freemiusFromUrl.billing_cycle
    }

    handler.open({
      name,
      licenses,
      billing_cycle,
      purchaseCompleted: function (response) {
        if (typeof fbq !== 'undefined') {
          fbq('track', 'Purchase', {
            currency: response.purchase.currency.toUpperCase(),
            value: response.purchase.initial_amount,
          });
        }

        window.location.href = 'admin.php?page=masterstudy-starter-activation'
      },
    })
  }

  $(document).on('click', '.masterstudy-starter-wizard__button-freemius', function(e) {
    handlerPurchase(e, $(this));
    return false;
  });
});
