testiframe = () ->
    if window.self isnt window.top
        $('html').addClass 'iframe'

# All DOM Ready Actions
$ ->
    testiframe()