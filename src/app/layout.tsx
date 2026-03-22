import type { Metadata } from "next";
import Script from "next/script";
import Navigation from "@/components/Navigation";
import Footer from "@/components/Footer";
import LayoutWrapper from "@/components/LayoutWrapper";
import FloatingWhatsApp from "@/components/FloatingWhatsApp";
import "./globals.css";

export const metadata: Metadata = {
  metadataBase: new URL("https://www.women-coders.org"),
  title: {
    default: "Mumbai Women Coders",
    template: "%s | Mumbai Women Coders",
  },
  description: "A community for women who code in Mumbai and beyond.",
  applicationName: "Mumbai Women Coders",
  authors: [{ name: "Mumbai Women Coders" }],
  generator: "Next.js",
  keywords: ["Mumbai Women Coders", "Women in Tech", "Coding Community", "Mumbai Developers"],
  referrer: "origin-when-cross-origin",
  creator: "Mumbai Women Coders",
  publisher: "Mumbai Women Coders",
  formatDetection: {
    email: false,
    address: false,
    telephone: false,
  },
  alternates: {
    canonical: '/',
  },
  openGraph: {
    title: "Mumbai Women Coders",
    description: "A community for women who code in Mumbai and beyond.",
    url: "https://www.women-coders.org",
    siteName: "Mumbai Women Coders",
    locale: "en_IN",
    type: "website",
    images: [
      {
        url: "/assets/images/logo/dark/logo-main.webp",
        width: 1200,
        height: 630,
        alt: "Mumbai Women Coders Logo",
      },
    ],
  },
  twitter: {
    card: "summary_large_image",
    title: "Mumbai Women Coders",
    description: "A community for women who code in Mumbai and beyond.",
    images: ["/assets/images/logo/dark/logo-main.webp"],
  },
  icons: {
    icon: [
      { url: '/favicon.ico', sizes: '48x48', type: 'image/x-icon' },
      { url: '/assets/images/favicon/favicon-96x96.png', sizes: '96x96', type: 'image/png' },
      { url: '/assets/images/favicon/favicon.svg', type: 'image/svg+xml' }
    ],
    shortcut: '/favicon.ico',
    apple: '/assets/images/favicon/apple-touch-icon.png',
  },
  manifest: '/site.webmanifest',
};

export const viewport = {
  width: "device-width",
  initialScale: 1,
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <head>
        {/* Custom Fonts: Albert Sans & Archivo Black */}
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Archivo+Black&display=swap" rel="stylesheet" />

        {/* Bootstrap 5 CSS */}
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
        {/* Font Awesome */}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
        {/* Animate.css */}
        <link rel="stylesheet" href="/assets/css/animate.min.css" />
        {/* Swiper.js */}
        <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css" />
        {/* Flag Icons CSS */}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />

        {/* Custom CSS */}
        <link rel="stylesheet" href="/assets/css/theme.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />
        {/* Schema.org JSON-LD for Google Branding */}
        <script
          type="application/ld+json"
          dangerouslySetInnerHTML={{
            __html: JSON.stringify({
              "@context": "https://schema.org",
              "@type": "WebSite",
              "name": "Mumbai Women Coders",
              "url": "https://www.women-coders.org",
              "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.women-coders.org/events?q={search_term_string}",
                "query-input": "required name=search_term_string"
              }
            })
          }}
        />
        <script
          type="application/ld+json"
          dangerouslySetInnerHTML={{
            __html: JSON.stringify({
              "@context": "https://schema.org",
              "@type": "Organization",
              "name": "Mumbai Women Coders",
              "url": "https://www.women-coders.org",
              "logo": "https://www.women-coders.org/assets/images/logo/dark/logo-main.webp",
              "sameAs": [
                "https://www.meetup.com/mumbai-women-coders/",
                "https://www.instagram.com/mumbaiwomencoders/",
                "https://www.linkedin.com/company/mumbai-women-coders/",
                "https://twitter.com/MumWomenCoders"
              ]
            })
          }}
        />
      </head>
      <body>
        <LayoutWrapper>
          <Navigation />
          {children}
          <Footer />
        </LayoutWrapper>
        <FloatingWhatsApp />

        {/* Scripts */}
        <Script src="/assets/js/jquery-3.7.1.min.js" strategy="beforeInteractive" />
        <Script src="/assets/js/bootstrap.bundle.min.js" strategy="lazyOnload" />
        <Script src="/assets/js/swiper-bundle.min.js" strategy="lazyOnload" />
        <Script src="/assets/js/main.js" strategy="lazyOnload" />
      </body>
    </html>
  );
}
