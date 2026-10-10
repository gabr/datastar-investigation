https://data-star.dev/guide/getting_started

# 2026.10.08

    I feel like there is something to learn from this framework.
    I'm not necessary planning on actually using it on production
    applications but I would like to explore their ideas.

# 2026.10.09

    I've typed out a half of examples from getting started guide.
    So far nothing very exciting but it's quite amazing how much
    can be done without touching JavaScript.  But definitely harder
    to trouble shoot issues as there is no way to do step by step
    debugging - you just have to look at all the signals and names
    and try to spot potential typos or miss-configuration.

    In the end that might be a final nail in the coffin for those
    clever attribute based frameworks (angular, htmx and data-star)
    as just doing the same by hand in JavaScript is not much more
    work but way easier to trouble shoot in more complex scenarios.

    It will be a worth exercise to actually try reproduce the same
    effects with just plain Java Script later after I'll finish here.

# 2026.10.10

    I've finished the getting started guide but my conclusions from
    when I was half way in didn't change.  The framework is very nice.
    Clear, simple, easy to learn, performant.  You can do a lot with
    very few lines of code.  What I dislike is not the framework but
    the approach/technique in general.

    It makes it so that the logic of the interface is scattered all
    over the place.  What's better here, than in the angular and React,
    is that there are only two places: html and backend.  In others it
    is also in Java Script.  But you can't just read the code and see
    what happens sequentially.  It's like SQL query language or like
    React - you write a statement and based on the rules and current
    state it makes changes.  You can't execute it step by step and see
    them happen in order and inspect each one individually.  Here in
    particular the logic is quite dense - one small code change can
    have huge effects.

    Data-star tries to avoid Java Script at all cost as it seems.
    For good reasons, as people abuse it and tend to bleed the backend
    state into the browser, which results in bugs and bad user
    experience.  Not only that but people write too much of it making
    web applications bloated and slow.  They mostly succeeded as you
    will write some snippets of Java Script inside the attributes but
    besides that on can achieve complex interactions only with the
    tools they provide.

    But I never had issues with Java Script.  Simple frontend code is
    actually easier to understand then complex interactions that emerge
    from the data attributes soup.  BUT I have to give it to them that
    I would have to write more code to achieve the same results - maybe
    - I'll verify that later.

    Also their solution isn't perfect.  It's very well optimized for
    most common use cases but they do have specific workarounds and ad
    hock special attributes to handle weird specific cases:
    https://data-star.dev/how_tos/poll_the_backend_at_regular_intervals
    When I see that I'm disgusted as those type of things are so easy
    in regular Java Script but here you need special tool to do basic
    thing.  There are hacks like sending Java Script from the backend
    to redirect to a different page.

    After all of that I don't want to continue with it.
    I did learned a few new things like SSE connections and they did
    mentioned View Transition API that I was not aware of:
    https://developer.mozilla.org/en-US/docs/Web/API/View_Transition_API
    So I have some reading to do now but in general what I will do now
    is that I will try to reimplement all those small code snippets from
    the guide using Java Script to see how much work will that be.

    ---

    So the View Transition API is there, it promises a lot but the
    effect I saw in browsers was poor or straight up bad.  Firefox does
    not implement transitions between pages - only single page apps and
    even that looks terrible.  Chrome claims to implement it all but it
    sometimes works, sometimes doesn't and looks equally terrible.  IMO
    it's not worth bothering with those transitions and just make the
    website fast.

    ---

    I reimplemented everything using just Java Script.  I'm really
    surprised how little code was needed to achieve exactly the same
    results.  Only 14 lines of Java Script and I could simplify one of
    the backend endpoints in half.  I also experimented with default
    HTML attributed and tried to implement features with just them.
    Looks ugly and I prefer doing that in script but it's doable.

    I was expecting that much more code will be needed but it turned
    out to not be true.  This concludes my research and I don't see
    reasons to use the data-star framework.  It's a bag of useful ideas
    and I like that it propagates lean and performant websites which
    have a single source of truth on the backend.  But the framework
    itself is cumbersome in comparison to regular Vanilla Java Script
    which can be easily debugged.

