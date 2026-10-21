# Lawrance FSE Demo

A small Full Site Editing (FSE) **block theme** by Lawrance Babu Gain. It uses no classic PHP templates, no page builder and no jQuery. Everything can be edited in **Appearance → Editor** (the Site Editor).

## Structure
```
lawrance-fse-demo/
├── style.css          Theme header + 3 custom block-style rules + focus styles
├── functions.php      Editor styles, front-end enqueue, register_block_style(), pattern category
├── theme.json         v3 design system (settings + styles + templateParts + customTemplates)
├── styles/            Style variations: dark.json, warm.json
├── templates/         index, home, front-page, single, page, page-no-title, archive, search, 404
├── parts/             header (site title + Navigation), footer, sidebar
└── patterns/          hero, services (3 columns), testimonial, cta, posts-grid (Query Loop)
```

## FSE concepts demonstrated
- **theme.json (v3):** custom 7-colour palette and 3 gradients (defaults off), fluid typography (5 sizes with min/max clamps), system font stacks (sans, serif, mono; no external font requests), a 5-step spacing scale, `contentSize` 720px and `wideSize` 1200px, `appearanceTools`, root-padding-aware alignments, element styles (link with hover, button with hover, headings h1–h3), and per-block styles for `core/button`, `core/navigation`, `core/quote`, `core/post-title` and `core/site-title`.
- **Templates and template parts:** HTML block markup in `templates/` follows the template hierarchy (`front-page` → `home` → `index`; `single`, `page`, `archive`, `search`, `404`). The parts are registered in `theme.json → templateParts` with header and footer areas. The single template uses a two-column layout with `sidebar.html` as an `<aside>`. `page-no-title` is a custom template users can pick per page.
- **Patterns:** PHP files in `patterns/` are registered automatically through their file headers (Title, Slug, Categories, Description), and strings go through `esc_html_e()` so they can be translated. `front-page.html` is built only from `<!-- wp:pattern -->` references. `posts-grid` is a Query Loop using a grid `post-template`.
- **Style variations:** `styles/dark.json` and `styles/warm.json` change palette tokens (Warm also changes the font family and button radius). Switch them under Site Editor → Styles → Browse styles. Because blocks use preset tokens, the whole site changes with no CSS edits.
- **Custom block styles:** `register_block_style()` adds **Card** (`core/group`), **Outline pill** (`core/button`) and **Rounded shadow** (`core/image`). Each one shows up in the block's Styles panel, and its CSS is in `style.css`, which is also loaded in the editor with `add_editor_style()`.
- **Site Editor customization:** templates, parts, global styles and navigation (a `wp_navigation` post) can all be edited visually. User changes are saved to the database as overrides of the theme files.
- **Exporting with Create Block Theme:** install the *Create Block Theme* plugin, make changes in the Site Editor, then use *Save Changes to Theme* to write the database overrides back into `theme.json`, `templates/`, `parts/` and `styles/`. Commit the result to Git, or use *Export Zip*. This keeps code and the editor in sync.

## Install
Upload `lawrance-fse-demo.zip` under Appearance → Themes → Add New → Upload, then activate it. Requires WordPress 6.5+.

License: GPL-2.0-or-later.
