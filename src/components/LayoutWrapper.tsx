"use client";

import { useEffect } from "react";
import { usePathname } from "next/navigation";

export default function LayoutWrapper({
    children,
}: {
    children: React.ReactNode;
}) {
    const pathname = usePathname();

    useEffect(() => {
        // Re-initialize main js scripts when location changes
        if (typeof window !== "undefined" && (window as any).initMainJS) {
            // Need a slight timeout to let DOM render completely
            setTimeout(() => {
                (window as any).initMainJS();
            }, 100);
        }

        // Scroll to top on route change
        window.scrollTo(0, 0);
    }, [pathname]);

    return <>{children}</>;
}
