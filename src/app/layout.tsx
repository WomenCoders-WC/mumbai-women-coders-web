import type { Metadata } from "next";
import Script from "next/script";
import Navigation from "@/components/Navigation";
import Footer from "@/components/Footer";
import LayoutWrapper from "@/components/LayoutWrapper";

export const metadata: Metadata = {
  metadataBase: new URL("https://womencoders.org"),
  title: "Mumbai Women Coders",
  description: "A community for women who code in Mumbai and beyond.",
  icons: {
    icon: [
      { url: '/assets/images/favicon/favicon-96x96.png', sizes: '96x96', type: 'image/png' },
      { url: '/assets/images/favicon/favicon.svg', type: 'image/svg+xml' }
    ],
    shortcut: '/assets/images/favicon/favicon.ico',
    apple: '/assets/images/favicon/apple-touch-icon.png',
  },
  manifest: '/assets/images/favicon/site.webmanifest',
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
      </head>
      <body>
        <LayoutWrapper>
          <Navigation />
          {children}
          <Footer />
        </LayoutWrapper>

        {/* Scripts */}
        <Script src="/assets/js/jquery-3.7.1.min.js" strategy="beforeInteractive" />
        <Script src="/assets/js/bootstrap.bundle.min.js" strategy="lazyOnload" />
        <Script src="/assets/js/swiper-bundle.min.js" strategy="lazyOnload" />
        <Script src="/assets/js/main.js" strategy="lazyOnload" />
      </body>
    </html>
  );
}
