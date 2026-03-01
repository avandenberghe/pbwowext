## List of events

### PHP events

#### Subscribed core events

Event name: `core.page_header`

Description: Assigns PBWoW template variables (logo, top-bar, video background, etc.) on every page load.

Listener: `paybas\pbwowext\event\stylelistener::page_header`

Since: PBWoW 3.2.0

### Template events

#### Subscribed phpBB core template events

Event name: `overall_header_head_append`

Description: Includes the PBWoW CSS stylesheet and injects custom logo styles into the page head.

Since: PBWoW 3.2.2

---

Event name: `overall_header_body_before`

Description: Renders the top header-bar and the video background container before the page body.

Since: PBWoW 3.2.2

---

Event name: `overall_footer_copyright_prepend`

Description: Adds the PBWoW attribution line before the phpBB copyright footer.

Since: PBWoW 3.0.0

#### Custom template events

Event name: `top_bar_links_before`

Description: Allows inserting content at the start of the top-bar link list, before the quickstyle event and user-defined top-bar code.

Placement: `overall_header_body_before.html` (top-bar `<ul>`)

Since: PBWoW 3.2.2

---

Event name: `quickstyle_event`

Description: Hook point inside the top-bar for a style/theme switcher or similar widget.

Placement: `overall_header_body_before.html` (top-bar `<ul>`)

Since: PBWoW 3.2.2

---

Event name: `top_bar_links_after`

Description: Allows inserting content at the end of the top-bar link list, after the user-defined top-bar code.

Placement: `overall_header_body_before.html` (top-bar `<ul>`)

Since: PBWoW 3.2.2
