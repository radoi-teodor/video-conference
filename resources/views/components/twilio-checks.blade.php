<script type="text/javascript">
    function isFirefox() {
        var mediaSourceSupport = !!navigator.mediaDevices.getSupportedConstraints().mediaSource;
        var matchData = navigator.userAgent.match('/Firefox/(d) /' );
        var firefoxVersion = 0;
        if (matchData && matchData[1]) {
            firefoxVersion = parseInt(matchData[1], 10);
        }
        return mediaSourceSupport && firefoxVersion >= 52;
    }

    function isChrome() {
      return 'chrome' in window;
    }

    function canScreenShare() {
      return isFirefox() || isChrome();
    }
</script>
